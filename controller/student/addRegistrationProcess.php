<?php
    require_once "../../model/registrationModel.php";
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $subjects=$_SESSION['registation'];
        $registered_subjects=serialize($_SESSION['registation']);
        $student_id=$_SESSION['id'];

        $name=$_REQUEST['name'];
        $studentid=$_REQUEST['studentid'];
        $fname=$_REQUEST['fname'];
        $mname=$_REQUEST['mname'];
        $program=$_REQUEST['program'];
        $department=$_REQUEST['department'];
        $registration=$_REQUEST['registration'];
        $year=$_REQUEST['year'];
        $semester=$_REQUEST['semester'];
        $sesson=$_REQUEST['sesson'];
        $presentAddress=$_REQUEST['presentAddress'];
        $permanentAddress=$_REQUEST['permanentAddress'];
        $nationalID=$_REQUEST['nationalID'];
        $nationality=$_REQUEST['nationality'];
        $email=$_REQUEST['email'];
        $bloodGroup=$_REQUEST['bloodGroup'];
        $residential=$_REQUEST['residential'];
        $hallName=$_REQUEST['hallName'];
        
        $request=[
            'student_id'=> $student_id,
            'registered_subjects'=> $registered_subjects,
            'name'=> $name,
            'studentid'=> $studentid,
            'fname'=> $fname,
            'mname'=> $mname,
            'program'=> $program,
            'department'=> $department,
            'registration'=> $registration,
            'year'=> $year,
            'semester'=> $semester,
            'sesson'=> $sesson,
            'presentAddress'=> $presentAddress,
            'permanentAddress'=> $permanentAddress,
            'nationalID'=> $nationalID,
            'nationality'=> $nationality,
            'email'=> $email,
            'bloodGroup'=> $bloodGroup,
            'residential'=> $residential,
            'hallName'=> $hallName
        ];

        if(sizeof($subjects)>0){
            if(addRegistration($request)){
                unset($_SESSION['registation']);
                echo "success";
             }
             else{
                 echo "*Something went wrong, try again!";
             }
        }
        else{
            echo "*Add Subjects";
        }

    }

?>
