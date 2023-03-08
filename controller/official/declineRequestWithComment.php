<?php 
        require_once "../../model/connection.php";
        require_once "../../model/userModel.php";
        session_start();
        $conn=getConnection();

       if($_SERVER["REQUEST_METHOD"] == "POST"){
            $id=$_REQUEST['id'];
            $comment=$_REQUEST['comment'];
            $user=getUserById($_SESSION['id']);
            $userType=$user['user_role'];
            $commentString=$userType.'_comment';
            $sql = "update requests set {$userType}='0', {$commentString}='{$comment}' where id='{$id}'";
             $conn->query($sql);
            echo $sql;
            
       }
?>