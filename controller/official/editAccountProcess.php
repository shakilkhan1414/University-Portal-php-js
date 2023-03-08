<?php 
    session_start();
    require_once "../../model/userModel.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_SESSION['id'];
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $gender=$_REQUEST['gender'];
        $dob=$_REQUEST['dob'];
        
        $user=[
            'id'=> $id,
            'name'=> $name,
            'email'=> $email,
            'gender'=> $gender,
            'dob'=> $dob
        ];

        $conn = getConnection();
            if(updateUser($user)){
                echo "success";
                }
                else{
                    echo "*Something went wrong, try again!";
                }
            
    }
    
?>