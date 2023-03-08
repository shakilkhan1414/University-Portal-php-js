<?php 
    require_once "../../model/registrationModel.php";
    session_start();
    if (!isset($_SESSION['registation'])) {
      $_SESSION['registation']=[];
    }
    $registeredSubjects=$_SESSION['registation'];

?>

<h4 class="mt-4 mb-3">Registered Subjects</h4>

<?php
    foreach ($registeredSubjects as $subject) {
        $subjectDetails=getSubjectById($subject);
        $id=$subjectDetails['id'];
        $name=$subjectDetails['name'];
        $credit=$subjectDetails['credit'];
        echo "<p class='mb-3'>$name ($credit) <span class='cursor' onclick=removeSubject($id)><i class='fa-solid fa-xmark text-danger'></i></span></p>";
    }
?>