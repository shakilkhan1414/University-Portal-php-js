<?php
    require_once "../../model/userModel.php";
    
    function process_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $name=process_input($_REQUEST['name']);
        $email=process_input($_REQUEST['email']);
        $password=process_input($_REQUEST['password']);
        $dob=process_input($_REQUEST['dob']);
        $gender=process_input($_REQUEST['gender']);
        $department=process_input($_REQUEST['department']);
        $admissionDate=process_input($_REQUEST['admissionDate']);
        $semester=process_input($_REQUEST['semester']);
        $completedCredit=process_input($_REQUEST['completedCredit']);
        $cgpa=process_input($_REQUEST['cgpa']);
        $balance=process_input($_REQUEST['balance']);

        $img_name = $_FILES['profileImage']['name'];
        $img_size = $_FILES['profileImage']['size'];
        $tmp_name = $_FILES['profileImage']['tmp_name'];
                    
        $img_explode = explode('.',$img_name);
        $img_ext = end($img_explode);
    
        $extensions = ["jpeg", "png", "jpg","JPEG", "PNG", "JPG"];

        if(in_array($img_ext, $extensions) === true){
            if($img_size > 5242880){
                echo "*Max upload size is 5 MB!";
            }
            else{
                $time = time();
                $new_img_name = $time.$img_name;
                if(move_uploaded_file($tmp_name,"../../view/img/".$new_img_name)){
                    $student=[
                        'name'=> $name,
                        'email'=> $email,
                        'password'=> $password,
                        'gender'=> $gender,
                        'dob'=> $dob,
                        'department'=> $department,
                        'admissionDate'=> $admissionDate,
                        'semester'=> $semester,
                        'completedCredit'=> $completedCredit,
                        'cgpa'=> $cgpa,
                        'balance'=> $balance,
                        'profileImage'=> $new_img_name
                    ];

                    $conn = getConnection();
                    $sql = "select * from users where email='{$email}'";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){
                        echo "*Email already exist!";
                    }
                
                    else{
                        if(insertUser($student)){
                            $getIdSql = "select * from users where email='{$email}'";
                            $studentResult = $conn->query($getIdSql);
                            $getStudent = mysqli_fetch_assoc($studentResult);
                            $studentId=$getStudent['id'];
                            $student['studentId']=$studentId;
                            insertStudentDetails($student);

                            echo "success";
                         }
                         else{
                             echo "*Something went wrong, try again!";
                         }
                    }
                }
            }
        }
        else{
            echo "*Invalid file format!";
        }
    }
  
?>
