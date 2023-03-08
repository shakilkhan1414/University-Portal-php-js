<?php
    session_start();

    $id=$_REQUEST['id'];
    if(!in_array($id, $_SESSION['registation'])){
        array_push($_SESSION['registation'], $id); 
    }
    else{
        $subjects=$_SESSION['registation'];
        unset( $subjects[array_search( $id, $subjects )] );
        $subjects = array_values($subjects);
        $_SESSION['registation']=$subjects;
    }
    

?>
