<?php 
    session_start();
    require_once "../../model/userModel.php";

    $user=getUserById($_SESSION['id']);
    
?>

<div class="container">
    <div class="title">Edit Profile</div>

    <span id="msg"></span>

    <div class="content">
      <form id="editAccount" onsubmit="return editAccount();" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">ID</span>
            <input type="text" name="id" id="userId" autocomplete="off" value="<?=$user['id']?>" disabled>
          </div>
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="name" id="name" autocomplete="off" value="<?=$user['name']?>">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" id="email" autocomplete="off" value="<?=$user['email']?>" disabled>
          </div>
          <div class="input-box">
            <span class="details">Date of Birth</span>
            <input type="date" name="dob" id="date" value="<?=$user['dob']?>">
          </div>
        </div>

        <label class="form-label">Gender</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" value="male" <?php 
                if($user['gender']=="male"){
                    echo "checked";
                } ?>>
              <label class="form-check-label" for="gender">
                Male
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" value="female" <?php 
                if($user['gender']=="female"){
                    echo "checked";
                } ?>>
              <label class="form-check-label" for="gender">
                Female
              </label>
            </div>


        <div class="row mt-3 pb-3">
          <input type="submit" value="Update Profile" class="btn btn-primary btn-bg-color">
        </div>
      </form>
    </div>
  </div>

  <style>
      input[type="text"]{
          margin-bottom: 10px;
      }
  </style>

