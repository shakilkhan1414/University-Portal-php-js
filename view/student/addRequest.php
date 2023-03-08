<div class="container">
  <div class="title mb-2">Clearence Form</div>
  <span id="msg"></span>
    
  <div class="content">
    <form method="post" id="addRequest" onsubmit="return addRequestProcess();" enctype="multipart/form-data">

    <div class="row mb-3">
        <div class="col-md-12">
            <label for="name" class="form-label">Name (Bengali)</label>
            <input type="text" class="form-control" id="bname">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <label for="name" class="form-label">Name (English)</label>
            <input type="text" class="form-control" id="ename">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-12">
            <label for="fathersName" class="form-label">Father's Name (Bengali)</label>
            <input type="text" class="form-control" id="bfathersName">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <label for="fathersName" class="form-label">Father's Name (English)</label>
            <input type="text" class="form-control" id="efathersName">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-12">
            <label for="address" class="form-label">Permanent Address</label>
            <textarea name="message" id="address" cols="30" rows="3" class="form-control"></textarea>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-12">
            <label for="phone" class="form-label">Phone no</label>
            <input type="text" class="form-control" id="phone">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="roll" class="form-label">Roll no</label>
            <input type="text" class="form-control" id="roll">
        </div>
        <div class="col-md-6">
            <label for="registration" class="form-label">Registration no</label>
            <input type="text" class="form-control" id="registration">
        </div>
      </div>

    <div class="row mb-3">
        <div class="col-md-6">
          <label for="department" class="form-label">Application Type</label>
            <select class="form-select" aria-label="Default select example" id="certificate_type">
              <option selected>Select Type</option>
              <option value="certificate">Certificate</option>
              <option value="academic transcript">Academic Transcript</option>
              <option value="medium of instruction">Medium of Instruction</option>
              <option value="merit certificate">Merit Certificate</option>
              <option value="marks equivalence certificate">Marks Equivalence Certificate</option>
          </select>
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
            <label for="sesson" class="form-label">Sesson</label>
            <input type="text" class="form-control" id="sesson">
        </div>
        <div class="col-md-6">
            <label for="examYear" class="form-label">Exam Year</label>
            <input type="text" class="form-control" id="examYear">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
            <label for="cgpa" class="form-label">CGPA</label>
            <input type="text" class="form-control" id="cgpa">
        </div>
        <div class="col-md-6">
            <label for="resultDate" class="form-label">Result Date</label>
            <input type="text" class="form-control" id="resultDate">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-12">
            <label for="bankDetails" class="form-label">Bank Name and Date of Deposit</label>
            <textarea name="message" id="bankDetails" cols="30" rows="4" class="form-control"></textarea>
        </div>
      </div>

      <div class="button pb-3">
        <input type="submit" value="Submit" class="btn btn-primary form-control btn-bg-color">
      </div>

    </form>
  </div>
</div>
