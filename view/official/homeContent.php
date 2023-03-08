<?php
    require_once "../../model/userModel.php";
    require_once "../../model/requestModel.php";
    require_once "../../model/registrationModel.php";
    session_start();

    $users=getAllUser();
    $students=[];
    foreach ($users as $user) {
        if($user['user_role']=='student'){
            array_push($students, $user); 
        }
    }
    $totalStudents=sizeof($students);

    $requests=getAllRequest();
    $totalRequests=sizeof($requests);

    $user=getUserById($_SESSION['id']);
    $userType=$user['user_role'];
    $pendingRequests=[];

    foreach ($requests as $request) {
        if($request[$userType]==''){
            array_push($pendingRequests, $request); 
        }
    }
    $totalPending=sizeof($pendingRequests);

    $registrations=getAllRegistration();
    $totalRegistrations=sizeof($registrations);

    $user=getUserById($_SESSION['id']);
    $userType=$user['user_role'];
    $pendingRegistrations=[];

    foreach ($registrations as $registration) {
        if($registration[$userType]==''){
            array_push($pendingRegistrations, $registration); 
        }
    }
    $totalPending2=sizeof($pendingRegistrations);

?>

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body d-flex flex-column align-items-start">
                <h5 class="card-title"><?=$totalStudents?></h5>
                <p class="card-text">Total Students</p>
                <a onclick="showStudents()" class="btn btn-primary btn-sm">See all</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body d-flex flex-column align-items-start">
                <h5 class="card-title"><?=$totalRequests?></h5>
                <p class="card-text">All Requests</p>
                <a onclick="ShowRequests()" class="btn btn-primary btn-sm">See all</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body d-flex flex-column align-items-start">
                <h5 class="card-title"><?=$totalPending?></h5>
                <p class="card-text">Pending Requests</p>
                <a onclick="ShowRequests()" class="btn btn-primary btn-sm">See all</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body d-flex flex-column align-items-start">
                <h5 class="card-title"><?=$totalRegistrations?></h5>
                <p class="card-text">All Registrations</p>
                <a onclick="ShowRegistrations()" class="btn btn-primary btn-sm">See all</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body d-flex flex-column align-items-start">
                <h5 class="card-title"><?=$totalPending2?></h5>
                <p class="card-text">Pending Registrations</p>
                <a onclick="ShowRegistrations()" class="btn btn-primary btn-sm">See all</a>
            </div>
        </div>
    </div>
</div>