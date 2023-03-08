<?php
    require_once "../../model/userModel.php";
    require_once "../../model/studentDetailsModel.php";
    
    function process_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $id=$_REQUEST['id'];
        $name=process_input($_REQUEST['name']);
        $email=process_input($_REQUEST['email']);
        $dob=process_input($_REQUEST['dob']);
        $gender=process_input($_REQUEST['gender']);
        $department=process_input($_REQUEST['department']);
        $admissionDate=process_input($_REQUEST['admissionDate']);
        $semester=process_input($_REQUEST['semester']);
        $completedCredit=process_input($_REQUEST['completedCredit']);
        $cgpa=process_input($_REQUEST['cgpa']);
        $balance=process_input($_REQUEST['balance']);

        $student=[
            'id'=> $id,
            'name'=> $name,
            'email'=> $email,
            'gender'=> $gender,
            'dob'=> $dob,
            'department'=> $department,
            'admissionDate'=> $admissionDate,
            'semester'=> $semester,
            'completedCredit'=> $completedCredit,
            'cgpa'=> $cgpa,
            'balance'=> $balance
        ];

        $conn = getConnection();
        $sql = "select * from users where email='{$email}'";
        $result = $conn->query($sql);

        if(updateUser($student)){
            updateStudentDetails($student);
            echo "success";
            }
            else{
                echo "*Something went wrong, try again!";
            }
    }
  
?>
