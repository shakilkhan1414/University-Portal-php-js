<?php 
    require_once "../../model/registrationModel.php";
    session_start();
    if (!isset($_SESSION['registation'])) {
      $_SESSION['registation']=[];
    }
    $registeredSubjects=$_SESSION['registation'];
    $conn=getConnection();

?>

<div class="container-fluid bg-light">
  <div class="row">
    <div class="col-md-8 p-4">
          <div class="container-fluid">
        <div class="title mb-2">Registration</div>
        <span id="msg"></span>
          
        <div class="content">
          <form method="post" id="addRegistration" onsubmit="return addRegistrationProcess();" enctype="multipart/form-data">

          <div class="row mb-3">
            <div class="col-md-6">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name">
            </div>
            <div class="col-md-6">
              <label for="studentid" class="form-label">ID No.</label>
              <input type="text" class="form-control" id="studentid">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="fname" class="form-label">Father's Name</label>
              <input type="text" class="form-control" id="fname">
            </div>
            <div class="col-md-6">
              <label for="mname" class="form-label">Mother's Name</label>
              <input type="text" class="form-control" id="mname">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="program" class="form-label">Program</label>
              <input type="text" class="form-control" id="program">
            </div>
            <div class="col-md-6">
              <label for="department" class="form-label">Department</label>
              <input type="text" class="form-control" id="department">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="registration" class="form-label">Registration No.</label>
              <input type="text" class="form-control" id="registration">
            </div>
            <div class="col-md-6">
              <label for="year" class="form-label">Year</label>
              <input type="text" class="form-control" id="year">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="semester" class="form-label">Semester</label>
              <input type="text" class="form-control" id="semester">
            </div>
            <div class="col-md-6">
              <label for="sesson" class="form-label">Session</label>
              <input type="text" class="form-control" id="sesson">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="semester" class="form-label">Present Address</label>
              <textarea class="form-control" id="presentAddress" rows="3"></textarea>
            </div>
            <div class="col-md-6">
              <label for="sesson" class="form-label">Permanent Address</label>
              <textarea class="form-control" id="permanentAddress" rows="3"></textarea>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="nationalID" class="form-label">national ID</label>
              <input type="text" class="form-control" id="nationalID">
            </div>
            <div class="col-md-6">
              <label for="nationality" class="form-label">Nationality</label>
              <input type="text" class="form-control" id="nationality">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" id="email">
            </div>
            <div class="col-md-6">
              <label for="bloodGroup" class="form-label">Blood Group</label>
              <input type="text" class="form-control" id="bloodGroup">
            </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-6">
                  <label class="form-label">Residential:&nbsp;&nbsp;</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="Yes" name="residential" checked>
                    <label class="form-check-label">Yes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="No" name="residential">
                    <label class="form-check-label">No</label>
                  </div>
              </div>
          </div>

          <div class="row mb-3">
            <div class="col-md-12">
              <label for="hallName" class="form-label">Hall Name (If Residential)</label>
              <input type="text" class="form-control" id="hallName">
            </div>
          </div>

          <div class="row mb-3">
              <div class="col-md-12">
                  <label for="semester" class="form-label">Select Semester</label>
                  <select id="semesterSubject" class="form-select" onchange="changeSemester()">
                    <?php
                        for ($i=1; $i < 9; $i++) { 
                          echo "<option value='$i'>$i</option>";
                        }
                    ?>
                  </select>
              </div>
          </div>

          <label for="semester" class="form-label">Subjects</label>

          <div id="semester-wise-subjects">
          
          </div>
          
            <div class="button pb-3 mt-4">
              <input type="submit" value="Submit" class="btn btn-primary form-control btn-bg-color">
            </div>

          </form>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div id="registeredSubjects" class="sticky-btn">
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
      </div>
    </div>

  </div>
</div>

