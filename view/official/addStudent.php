<div class="container">
  <div class="title">Add Student</div>
  <span id="msg"></span>
    
  <div class="content">
    <form method="post" id="addStudent" onsubmit="return addStudentProcess();" enctype="multipart/form-data">

      <div class="row mb-3">
        <div class="col-md-6">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name">
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" id="email">
        </div>
      </div>
     
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="password" class="form-label">Password</label>
          <input type="text" class="form-control" id="password">
        </div>
        <div class="col-md-6">
          <label for="dob" class="form-label">Date of Birth</label>
          <input type="date" class="form-control" id="dob">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Gender</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" value="male" checked>
              <label class="form-check-label" for="gender">
                Male
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" value="female">
              <label class="form-check-label" for="gender">
                Female
              </label>
            </div>
          </div>
      <div class="col-md-6">
          <label for="department" class="form-label">Department</label>
            <select class="form-select" aria-label="Default select example" id="department">
              <option selected>Select Department</option>
              <option value="CSE">CSE</option>
              <option value="EEE">EEE</option>
              <option value="BBA">BBA</option>
          </select>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label for="admissionDate" class="form-label">Admission Date</label>
          <input type="date" class="form-control" id="admissionDate">
        </div>
        <div class="col-md-6">
          <label for="semester" class="form-label">Semester</label>
          <input type="text" class="form-control" id="semester">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label for="completedCredit" class="form-label">Completed Credit</label>
          <input type="text" class="form-control" id="completedCredit">
        </div>
        <div class="col-md-6">
          <label for="cgpa" class="form-label">CGPA</label>
          <input type="text" class="form-control" id="cgpa">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label for="balance" class="form-label">Balance</label>
          <input type="text" class="form-control" id="balance">
        </div>
        <div class="col-md-6">
          <label class="form-label" for="profileImage">Profile Image</label>
          <input type="file" name="profileImage" class="form-control" id="profileImage" />
        </div>
        
      </div>

      <div class="button pb-3">
        <input type="submit" value="Add Student" class="btn btn-primary form-control btn-bg-color">
      </div>

    </form>
  </div>
</div>
