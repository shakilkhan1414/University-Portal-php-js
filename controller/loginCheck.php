<?php 
    session_start();
    require_once "../model/userModel.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];

        if(isset($_REQUEST['check'])){
            setcookie('email', $email, time() + (86400 * 30), "/");
            setcookie('password', $password, time() + (86400 * 30), "/");
        }

        if(userLoginCheck($email,$password)){
            $user=getUserById($_SESSION['id']);
            $userType=$user['user_role'];
                echo $userType;
            }
            else{
                echo "failed";
            }
        }

?>