<?php
    require_once "../../model/requestModel.php";
    require_once "../../model/registrationModel.php";
    session_start();

    $requests=getAllRequest();

    $myRequests=[];

    foreach ($requests as $request) {
        if($request['req_from']==$_SESSION['id']){
            array_push($myRequests, $request); 
        }
    }
    $myRequests=sizeof($myRequests);

    $registrations=getAllRegistration();

    $myRegistrations=[];

    foreach ($registrations as $registration) {
        if($registration['student_id']==$_SESSION['id']){
            array_push($myRegistrations, $registration); 
        }
    }
    $myRegistrations=sizeof($myRegistrations);

?>

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body d-flex flex-column align-items-start">
                <h5 class="card-title"><?=$myRequests?></h5>
                <p class="card-text">My Requests</p>
                <a onclick="myRequests()" class="btn btn-primary btn-sm">See all</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body d-flex flex-column align-items-start">
                <h5 class="card-title"><?=$myRegistrations?></h5>
                <p class="card-text">My Registrations</p>
                <a onclick="myRegistrations()" class="btn btn-primary btn-sm">See all</a>
            </div>
        </div>
    </div>
</div>