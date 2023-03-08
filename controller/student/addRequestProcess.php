<?php
    require_once "../../model/requestModel.php";
    session_start();
    
    function process_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $bname=process_input($_REQUEST['bname']);
        $ename=process_input($_REQUEST['ename']);
        $bfathersName=process_input($_REQUEST['bfathersName']);
        $efathersName=process_input($_REQUEST['efathersName']);
        $address=process_input($_REQUEST['address']);
        $phone=process_input($_REQUEST['phone']);
        $roll=process_input($_REQUEST['roll']);
        $registration=process_input($_REQUEST['registration']);
        $certificate_type=process_input($_REQUEST['certificate_type']);
        $department=process_input($_REQUEST['department']);
        $sesson=process_input($_REQUEST['sesson']);
        $examYear=process_input($_REQUEST['examYear']);
        $cgpa=process_input($_REQUEST['cgpa']);
        $resultDate=process_input($_REQUEST['resultDate']);
        $bankDetails=process_input($_REQUEST['bankDetails']);
        $req_from=$_SESSION['id'];

        $request=[
            'bname'=> $bname,
            'ename'=> $ename,
            'bfathersName'=> $bfathersName,
            'efathersName'=> $efathersName,
            'address'=> $address,
            'phone'=> $phone,
            'roll'=> $roll,
            'registration'=> $registration,
            'certificate_type'=> $certificate_type,
            'department'=> $department,
            'sesson'=> $sesson,
            'examYear'=> $examYear,
            'cgpa'=> $cgpa,
            'resultDate'=> $resultDate,
            'bankDetails'=> $bankDetails,
            'req_from'=> $req_from
        ];

        if(addRequest($request)){
            echo "success";
         }
         else{
             echo "*Something went wrong, try again!";
         }
    }

?>
