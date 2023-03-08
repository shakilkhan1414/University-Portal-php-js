<?php
    session_start();
    
    $id=$_REQUEST['id'];
    $subjects=$_SESSION['registation'];
    unset( $subjects[array_search( $id, $subjects )] );
    $subjects = array_values($subjects);
    $_SESSION['registation']=$subjects;

?>
