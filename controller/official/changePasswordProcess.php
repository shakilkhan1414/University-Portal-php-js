<?php 
    session_start();
    require_once "../../model/userModel.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $cpass=$_REQUEST['cpass'];
        $npass=$_REQUEST['npass'];
        
        $row=getUserById($_SESSION['id']);
        $password=$row['password'];

        if($password==$cpass){
            $conn=getConnection();
            $sql = "update users set password='{$npass}' where id='{$_SESSION['id']}'";
            if($conn->query($sql)){
                echo "success";
            }
            else{
                echo "*Something went wrong!";
            }
        }
        else{
            echo "*Incorrect current password!";
        }
    }

?>