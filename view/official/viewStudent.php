<?php 
    require_once "../../model/userModel.php";
    require_once "../../model/studentDetailsModel.php";

    $student=getUserById($_REQUEST['id']);
    $studentDetails=getStudentDetailsById($_REQUEST['id']);
    $role=str_replace("_"," ",$student['user_role']);
?>

<div class="row">
    <section class="profileSection" style="margin-right: 20px;">
        <div class="account-full">
            <img src="../img/<?=$student['profile_image']?>">
        </div>
        <div class="account-full">
            <div class="account-half">ID:</div>
            <div class="account-half-2"><?=$student['id']?></div>
        </div>
        <div class="account-full">
            <div class="account-half">Name:</div>
            <div class="account-half-2"><?=$student['name']?></div>
        </div>
        <div class="account-full">
            <div class="account-half">Email:</div>
            <div class="account-half-2"><?=$student['email']?></div>
        </div>
        <div class="account-full">
            <div class="account-half">Gender:</div>
            <div class="account-half-2" style="text-transform: capitalize;"><?=$student['gender']?></div>
        </div>
        <div class="account-full">
            <div class="account-half">Date of Birth:</div>
            <div class="account-half-2"><?=$student['dob']?></div>
        </div>
        <div class="account-full">
            <div class="account-half">User Type:</div>
            <div class="account-half-2" style="text-transform: capitalize;"><?=$role?></div>
        </div>
        <div class="account-full" style="margin-top: 20px;"> 
            <button onclick="showEditStudent(<?=$student['id']?>)">Edit</button>
        </div>
    </section>


    <section class="profileSection">
        <div class="account-full">
            <div class="account-half">Admission Date:</div>
            <div class="account-half-2"><?=$studentDetails['admission_date']?></div>
        </div>
        <div class="account-full">
            <div class="account-half">Department:</div>
            <div class="account-half-2" style="text-transform: uppercase;"><?=$studentDetails['department']?></div>
        </div>
        <div class="account-full">
            <div class="account-half">Semester:</div>
            <div class="account-half-2"><?=$studentDetails['semester']?></div>
        </div>
        <div class="account-full">
            <div class="account-half">Credit:</div>
            <div class="account-half-2"><?=$studentDetails['completed_credit']?></div>
        </div>
        <div class="account-full">
            <div class="account-half">CGPA:</div>
            <div class="account-half-2"><?=$studentDetails['cgpa']?></div>
        </div>
        <div class="account-full">
            <div class="account-half">Balance:</div>
            <div class="account-half-2"><?=$studentDetails['balance']?> BDT</div>
        </div>
    </section>
</div>