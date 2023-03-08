<div class="container">
    <div class="title">Change Password</div>

    <span id="msg"></span>

    <div class="content">
      <form id="changePass" onsubmit="return changePass();" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Current Password</span>
            <input type="password" name="cpass" id="cpass" placeholder="Enter current password" autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">New Password</span>
            <input type="password" placeholder="Enter new password" name="npass" id="npass" autocomplete="off">
          </div>
          <div class="input-box">
            <span class="details">Retype New Password</span>
            <input type="password" placeholder="Confirm new password" name="rpass" id="rpass" autocomplete="off">
          </div>
        </div>

        <div class="button pb-3">
          <input type="submit" value="Change Password" class="btn btn-primary btn-bg-color">
        </div>
      </form>
    </div>
  </div>

  <style>
      form .user-details .input-box{
        width: calc(100% - 20px);
        margin-bottom: 15px;
      }
      .container {
        max-width: 400px;
    }
  </style>

