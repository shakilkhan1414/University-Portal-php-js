<?php 
    require_once "../../model/registrationModel.php";
    session_start();
    if (!isset($_SESSION['registation'])) {
      $_SESSION['registation']=[];
    }
    $registeredSubjects=$_SESSION['registation'];
    $conn=getConnection();
    $semester=$_REQUEST['semester'];
    $subjects=getSubjectBySemester($semester);
    
    foreach ($subjects as $subject) {
        $id=$subject['id'];
        if(in_array($id, $registeredSubjects)){
            $isSelected='checked';
        }
        else{
          $isSelected='';
        }
        
        $name=$subject['name'];
        $slug=str_replace(' ','_',$name);
        $slug=strtolower($slug);
        if($slug=='option-1'|| $slug=='option-2'){
          echo "<div class='row mb-3'>
                  <div class='col-md-12'>
                    <input class='form-check-input' type='checkbox' value='$slug' id='$slug' onchange=semesterWiseSubjects('$slug') $isSelected>
                    <label class='form-check-label' for='$slug'>$name ($subject[credit])</label>
                  </div>
              </div>";
        }
        else{
          echo "<div class='row mb-3'>
                  <div class='col-md-12'>
                    <input class='form-check-input' type='checkbox' value='$slug' id='$slug' onchange=addSubject($id) $isSelected>
                    <label class='form-check-label' for='$slug'>$name ($subject[credit])</label>
                  </div>
              </div>";
        }
        
      }

?>

