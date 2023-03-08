<?php 
    session_start();
    require_once "../../model/userModel.php";
    require_once "../../model/studentDetailsModel.php";

    $student=getUserById($_REQUEST['id']);
    $studentDetails=getStudentDetailsById($_REQUEST['id']);

?>

<div class="container">
  <div class="title">Update Student</div>
  <span id="msg"></span>
    
  <div class="content">
    <form method="post" id="editStudent" onsubmit="return editStudent();" enctype="multipart/form-data">

      <input type="hidden" name="id" id="id" value="<?=$student['id']?>">
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" value="<?=$student['name']?>">
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" id="email" value="<?=$student['email']?>">
        </div>
      </div>
     
      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Gender</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" value="male" <?php 
                if($student['gender']=="male"){
                    echo "checked";
                } ?>>
              <label class="form-check-label" for="gender">
                Male
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" value="female" <?php 
                if($student['gender']=="female"){
                    echo "checked";
                } ?>>
              <label class="form-check-label" for="gender">
                Female
              </label>
            </div>
          </div>
        <div class="col-md-6">
          <label for="dob" class="form-label">Date of Birth</label>
          <input type="date" class="form-control" id="dob" value="<?=$student['dob']?>">
        </div>
      </div>

      <div class="row mb-3">
      <div class="col-md-6">
          <label for="department" class="form-label">Department</label>
            <select class="form-select" aria-label="Default select example" id="department">
              <option>Select Department</option>
              <option value="CSE" <?php 
                if($studentDetails['department']=="CSE"){
                    echo "selected";
                } ?> >CSE</option>
              <option value="EEE" <?php 
                if($studentDetails['department']=="EEE"){
                    echo "selected";
                } ?> >EEE</option>
              <option value="BBA" <?php 
                if($studentDetails['department']=="BBA"){
                    echo "selected";
                } ?> >BBA</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="admissionDate" class="form-label">Admission Date</label>
          <input type="date" class="form-control" id="admissionDate" value="<?=$studentDetails['admission_date']?>">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label for="semester" class="form-label">Semester</label>
          <input type="text" class="form-control" id="semester" value="<?=$studentDetails['semester']?>">
        </div>
        <div class="col-md-6">
          <label for="completedCredit" class="form-label">Completed Credit</label>
          <input type="text" class="form-control" id="completedCredit" value="<?=$studentDetails['completed_credit']?>">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label for="cgpa" class="form-label">CGPA</label>
          <input type="text" class="form-control" id="cgpa" value="<?=$studentDetails['cgpa']?>">
        </div>
        <div class="col-md-6">
          <label for="balance" class="form-label">Balance</label>
          <input type="text" class="form-control" id="balance" value="<?=$studentDetails['balance']?>">
        </div>
      </div>

      <div class="button pb-3">
        <input type="submit" value="Update Student" class="btn btn-primary form-control btn-bg-color">
      </div>

    </form>
  </div>
</div>
