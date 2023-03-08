<?php 
    session_start();
    require_once "../../model/userModel.php";

    $user=getUserById($_SESSION['id']);
    $role=str_replace("_"," ",$user['user_role']);

?>

<section id="account" class="profileSection">
    <div class="account-full">
        <img src="../img/<?=$user['profile_image']?>">
    </div>
    <div class="account-full">
        <div class="account-half">ID:</div>
        <div class="account-half-2"><?=$user['id']?></div>
    </div>
    <div class="account-full">
        <div class="account-half">Name:</div>
        <div class="account-half-2"><?=$user['name']?></div>
    </div>
    <div class="account-full">
        <div class="account-half">Email:</div>
        <div class="account-half-2"><?=$user['email']?></div>
    </div>
    <div class="account-full">
        <div class="account-half">Gender:</div>
        <div class="account-half-2" style="text-transform: capitalize;"><?=$user['gender']?></div>
    </div>
    <div class="account-full">
        <div class="account-half">Date of Birth:</div>
        <div class="account-half-2"><?=$user['dob']?></div>
    </div>
    <div class="account-full">
        <div class="account-half">Role:</div>
        <div class="account-half-2" style="text-transform: capitalize;"><?=$role?></div>
    </div>
    <div class="account-full" style="margin-top: 20px;">
        <button onclick="showEditAccount()">Edit</button>
        <button onclick="showChangePass()">Change password</button>
    </div>
</section>