<?php 
        require_once "../../model/connection.php";
        require_once "../../model/userModel.php";
        session_start();
        $conn=getConnection();

       if($_SERVER["REQUEST_METHOD"] == "POST"){
            $id=$_REQUEST['id'];
            $user=getUserById($_SESSION['id']);
            $userType=$user['user_role'];
            $sql = "update registration set {$userType}='0' where id='{$id}'";
            echo $conn->query($sql);
            
       }
?>