<?php 
    require_once "../../model/requestModel.php";
    require_once "../../model/userModel.php";
    require_once "../../model/studentDetailsModel.php";
    session_start();
    $conn=getConnection();

    if(isset($_REQUEST['detete_id'])){
        $id=$_REQUEST['detete_id'];
        $delete_sql="delete from users where id={$id}";
        $conn->query($delete_sql);
    }

    $request=getRequestById($_REQUEST['id']);
    $student=getUserById($request['req_from']);
    $studentDetails=getStudentDetailsById($request['req_from']);

?>

<div class="container-fluid mb-3">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <button id="print-button" class="btn btn-primary" onclick="print()">Print</button>
        </div>
    </div>
</div>

<div class="container-fluid d-flex justify-content-center">
    <div id="print-content" class="request-container">
        <div class="mb-5 mt-1">
            <h4 class="text-center">American International University-Bangladesh</h4>
            <h5 class="text-center">Dhaka 1229, Bangladesh</h5>
            <h4 class="text-center">Application for <?=ucfirst($request['certificate_type'])?></h4>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3"><h6>Name (Bengali):</h6></div>
                        <div class="col-md-9"><p><?=$request['bname']?></p></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3"><h6>Name (English):</h6></div>
                        <div class="col-md-9"><p><?=$request['ename']?></p></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3"><h6>Father's Name (Bengali):</h6></div>
                        <div class="col-md-9"><p><?=$request['bfathersName']?></p></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3"><h6>Father's Name (English):</h6></div>
                        <div class="col-md-9"><p><?=$request['efathersName']?></p></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"><h6>Permanent Address:</h6></div>
                <div class="col-md-9"><p><?=$request['address']?></p></div>
            </div>
            <div class="row">
                <div class="col-md-3"><h6>Phone:</h6></div>
                <div class="col-md-9"><p><?=$request['phone']?></p></div>
            </div>
            <div class="row">
                <div class="col-md-3"><h6>Department:</h6></div>
                <div class="col-md-9"><p><?=strtoupper($request['department'])?></p></div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6"><h6>Roll:</h6></div>
                        <div class="col-md-6"><p><?=$request['roll']?></p></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6"><h6>Registration:</h6></div>
                        <div class="col-md-6"><p><?=$request['registration']?></p></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6"><h6>Sesson:</h6></div>
                        <div class="col-md-6"><p><?=$request['sesson']?></p></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6"><h6>Exam Year:</h6></div>
                        <div class="col-md-6"><p><?=$request['examYear']?></p></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6"><h6>CGPA:</h6></div>
                        <div class="col-md-6"><p><?=$request['cgpa']?></p></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6"><h6>Result Date:</h6></div>
                        <div class="col-md-6"><p><?=$request['resultDate']?></p></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"><h6>Bank Details:</h6></div>
                <div class="col-md-9"><p><?=$request['bankDetails']?></p></div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <h6>I request you to kindly issue me the <?=$request['certificate_type']?> at the earliest.</h6>
                </div>
            </div>
            <div class="row mt-5 mb-2">
                <div class="col-md-10"></div>
                <div class="col-md-2 text-center">
                    <p class="mb-1"><?=$request['ename']?></p>
                    <h6 class="signature">Applied By</h6>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <h6>Application for <?=$request['certificate_type']?> is accepted.</h6>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-3 text-center">
                    <?php
                        if($request['department_head_approvedBy']!=''){
                            $signature=getSignature($request['department_head_approvedBy']);
                            echo "<img class='sig' src='../img/signatures/$signature[signature]'>";
                        }
                        else{
                            echo "<img class='sig' src='../img/white.PNG'>";
                        }
                    ?>
                    <h6 class="signature">Department Head</h6>
                </div>
                <div class="col-md-3 text-center">
                    
                </div>
                <div class="col-md-3 text-center px-5">
                    
                </div>
                <div class="col-md-3 text-center">

                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <h6>His/Her Application for <?=$request['certificate_type']?> is Issued.</h6>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-3 text-center">
                    <?php
                        if($request['exam_controller']!=''){
                            $signature=getSignature($request['exam_controller_approvedBy']);
                            echo "<img class='sig' src='../img/signatures/$signature[signature]'>";
                        }
                        else{
                            echo "<img class='sig' src='../img/white.PNG'>";
                        }
                    ?>
                    <h6 class="signature">Exam Controller</h6>
                </div>
                <div class="col-md-3 text-center">
                    
                </div>
                <div class="col-md-3 text-center px-5">
                    
                </div>
                <div class="col-md-3 text-center">

                </div>
            </div>

        </div>

  <!-- clearence form -->
  <br><br><br><br><br>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-12 position-relative">
                    <h4 class="text-center">American International University-Bangladesh</h4>
                    <h4 class="text-center">Dhaka 1229, Bangladesh</h4>
                    <p class="text-center mb-0">Website: https://www.aiub.edu, Email: info@aiub.edu</p>
                    <img class="clearence-logo" src="../img/logo.png" alt="logo">
                    <hr class="my-2">
                </div>
            </div>
            <div class="title text-decoration-underline">Clearence Form</div>
            <div class="row">
                <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-3"><h6>Name of Applicant:</h6></div>
                            <div class="col-md-9"><p><?=$request['ename']?></p></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6"><h6>Roll No:</h6></div>
                            <div class="col-md-6"><p><?=$request['roll']?></p></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6"><h6>Registration No:</h6></div>
                            <div class="col-md-6"><p><?=$request['registration']?></p></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6"><h6>Department:</h6></div>
                            <div class="col-md-6"><p><?=strtoupper($request['department'])?></p></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6"><h6>Sesson:</h6></div>
                            <div class="col-md-6"><p><?=$request['sesson']?></p></div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-2">
                    <img class="img-fluid" src="../img/<?=$student['profile_image']?>">
                </div>
            </div>
            
            <div class="row mt-3 mb-2">
                <div class="col-md-12">
                    <h5 class="text-decoration-underline">a. Lab Clearence:</h5>
                </div>
            </div>
            <div class="row text-center btn-bg-color text-light">
                <div class="col-md-2 border-end py-2">
                    <h6 class="mb-0">Department</h6>
                </div>
                <div class="col-md-4 border-end py-2">
                    <h6 class="mb-0">Lab Name</h6>
                </div>
                <div class="col-md-2 border-end py-2">
                    <h6 class="mb-0">Location</h6>
                </div>
                <div class="col-md-4 border-end py-2">
                    <h6 class="mb-0">Comments</h6>
                </div>
            </div>
            <div class="row border-bottom">
                <div class="col-md-2 border-end py-2 border-start d-flex align-items-center">
                    <p class="mb-0">Department of CSE</p>
                </div>
                <div class="col-md-4 border-end px-0">
                    <p class="mb-0 border-bottom p-2">Software Lab</p>
                    <p class="mb-0 border-bottom p-2">Network Lab</p>
                    <p class="mb-0 border-bottom p-2">Operating Lab</p>
                    <p class="mb-0 border-bottom p-2">Micro Processor Lab</p>
                    <p class="mb-0 border-bottom p-2">Graphics Lab</p>
                    <p class="mb-0 border-bottom p-2">Database Lab</p>
                    <p class="mb-0 border-bottom p-2">DLD Lab</p>
                    <p class="mb-0 border-bottom p-2">Mobile Apps & Games Lab</p>
                    <p class="mb-0 border-bottom p-2">Sheikh Russel Lab</p>
                    <p class="mb-0 border-bottom p-2">Artificial Intelligence Lab</p>
                    <p class="mb-0 border-bottom p-2">Digital Signal Processing Lab</p>
                    <p class="mb-0 p-2">Mobile Computing Lab</p>
                </div>
                <div class="col-md-2 border-end px-0">
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 p-2">PANORAMA</p>
                </div>
                <div class="col-md-4 border-end px-0 d-flex flex-column justify-content-center">
                    <?php
                        if($request['lab_asistance_CSE']=='1'){
                            echo "<p class='mb-0 p-2'>All Okay</p>";
                        }
                        else if($request['lab_asistance_CSE']=='0'){
                                echo "<p class='mb-0 p-2'>$request[lab_asistance_CSE_comment]</p>";
                        }
                        else{
                            echo "
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 p-2'>&nbsp;</p>
                            ";
                        }
                    ?>
                    
                </div>
            </div>
            <div class="row border-bottom">
                <div class="col-md-2 border-end py-2 border-start d-flex align-items-center">
                    <p class="mb-0">Department of CE</p>
                </div>
                <div class="col-md-4 border-end px-0">
                    <p class="mb-0 border-bottom p-2">SM Lab</p>
                    <p class="mb-0 border-bottom p-2">EM Lab</p>
                    <p class="mb-0 border-bottom p-2">Drawing Lab</p>
                    <p class="mb-0 border-bottom p-2">Environmental Engineering Lab</p>
                    <p class="mb-0 border-bottom p-2">Fluid Lab</p>
                    <p class="mb-0 border-bottom p-2">Geo Technical Lab</p>
                    <p class="mb-0 border-bottom p-2">Transportation Lab</p>
                    <p class="mb-0 p-2">Surveying Lab</p>
                </div>
                <div class="col-md-2 border-end px-0">
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">NEXUS</p>
                    <p class="mb-0 border-bottom p-2">NEXUS</p>
                    <p class="mb-0 border-bottom p-2">NEXUS</p>
                    <p class="mb-0 p-2">NEXUS</p>
                </div>
                <div class="col-md-4 border-end px-0 d-flex flex-column justify-content-center">
                    <?php
                        if($request['lab_asistance_CE']=='1'){
                            echo "<p class='mb-0 p-2'>All Okay</p>";
                        }
                        else if($request['lab_asistance_CE']=='0'){
                                echo "<p class='mb-0 p-2'>$request[lab_asistance_CE_comment]</p>";
                        }
                        else{
                            echo "
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 p-2'>&nbsp;</p>
                            ";
                        }
                    ?>
                </div>
            </div>
            <div class="row border-bottom">
                <div class="col-md-2 border-end py-2 border-start d-flex align-items-center">
                    <p class="mb-0">Department of EEE</p>
                </div>
                <div class="col-md-4 border-end px-0">
                    <p class="mb-0 border-bottom p-2">Electronic Circuit Lab</p>
                    <p class="mb-0 border-bottom p-2">Electrical Machine Lab</p>
                    <p class="mb-0 border-bottom p-2">Electrical Circuit Lab</p>
                    <p class="mb-0 border-bottom p-2">Automation Lab</p>
                    <p class="mb-0 border-bottom p-2">Simulation Lab</p>
                    <p class="mb-0 border-bottom p-2">VLSI, DSP Lab</p>
                    <p class="mb-0 border-bottom p-2">Control System Lab</p>
                    <p class="mb-0 border-bottom p-2">High Voltage Lab</p>
                    <p class="mb-0 p-2">Solar System Lab</p>
                </div>
                <div class="col-md-2 border-end px-0">
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 p-2">PANORAMA</p>
                </div>
                <div class="col-md-4 border-end px-0 d-flex flex-column justify-content-center">
                    <?php
                        if($request['lab_asistance_EEE']=='1'){
                            echo "<p class='mb-0 p-2'>All Okay</p>";
                        }
                        else if($request['lab_asistance_EEE']=='0'){
                                echo "<p class='mb-0 p-2'>$request[lab_asistance_EEE_comment]</p>";
                        }
                        else{
                            echo "
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 p-2'>&nbsp;</p>
                            ";
                        }
                    ?>
                </div>
            </div>
            <div class="row border-bottom">
                <div class="col-md-2 border-end py-2 border-start d-flex align-items-center">
                    <p class="mb-0">Department of ICE</p>
                </div>
                <div class="col-md-4 border-end px-0">
                    <p class="mb-0 border-bottom p-2">Antenna Eng. & Satellite Com. Lab</p>
                    <p class="mb-0 border-bottom p-2">GIS Lab</p>
                    <p class="mb-0 border-bottom p-2">Switching and Routing</p>
                    <p class="mb-0 border-bottom p-2">Computer Communication</p>
                    <p class="mb-0 border-bottom p-2">Communication Architecture Lab</p>
                    <p class="mb-0 border-bottom p-2">Computer Lab</p>
                    <p class="mb-0 border-bottom p-2">Electronics and Electromagnetic Lab</p>
                    <p class="mb-0 p-2">Strategic Planning & Decision</p>
                </div>
                <div class="col-md-2 border-end px-0">
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 border-bottom p-2">PANORAMA</p>
                    <p class="mb-0 p-2">PANORAMA</p>
                </div>
                <div class="col-md-4 border-end px-0 d-flex flex-column justify-content-center">
                    <?php
                        if($request['lab_asistance_ICE']=='1'){
                            echo "<p class='mb-0 p-2'>All Okay</p>";
                        }
                        else if($request['lab_asistance_ICE']=='0'){
                                echo "<p class='mb-0 p-2'>$request[lab_asistance_ICE_comment]</p>";
                        }
                        else{
                            echo "
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 border-bottom p-2'>&nbsp;</p>
                                <p class='mb-0 p-2'>&nbsp;</p>
                            ";
                        }
                    ?>
                </div>
            </div>
            <div class="row border-bottom">
                <div class="col-md-2 border-end py-2 border-start d-flex align-items-center">
                    <p class="mb-0">Chemistry</p>
                </div>
                <div class="col-md-4 border-end px-0">
                    <p class="mb-0 p-2">Chemistry Lab</p>
                </div>
                <div class="col-md-2 border-end px-0">
                    <p class="mb-0 p-2">PANORAMA</p>
                </div>
                <div class="col-md-4 border-end px-0">
                    <?php
                        if($request['lab_asistance_chemistry']=='1'){
                            echo "
                                <p class='mb-0 p-2'>Okay</p>
                            ";
                        }
                        else if($request['lab_asistance_chemistry']=='0'){
                                echo "<p class='mb-0 p-2'>$request[lab_asistance_chemistry_comment]</p>";
                        }
                        else{
                            echo "
                                <p class='mb-0 p-2'>&nbsp;</p>
                            ";
                        }
                    ?>
                </div>
            </div>
            <div class="row border-bottom">
                <div class="col-md-2 border-end py-2 border-start d-flex align-items-center">
                    <p class="mb-0">Physics</p>
                </div>
                <div class="col-md-4 border-end px-0">
                    <p class="mb-0 p-2">Physics Lab</p>
                </div>
                <div class="col-md-2 border-end px-0">
                    <p class="mb-0 p-2">NEXUS</p>
                </div>
                <div class="col-md-4 border-end px-0">
                    <?php
                        if($request['lab_asistance_physics']=='1'){
                            echo "
                                <p class='mb-0 p-2'>Okay</p>
                            ";
                        }
                        else if($request['lab_asistance_physics']=='0'){
                                echo "<p class='mb-0 p-2'>$request[lab_asistance_physics_comment]</p>";
                        }
                        else{
                            echo "
                                <p class='mb-0 p-2'>&nbsp;</p>
                            ";
                        }
                    ?>
                </div>
            </div>
            <div class="row border-bottom">
                <div class="col-md-2 border-end py-2 border-start d-flex align-items-center">
                    <p class="mb-0">English</p>
                </div>
                <div class="col-md-4 border-end px-0">
                    <p class="mb-0 p-2">Language Lab</p>
                </div>
                <div class="col-md-2 border-end px-0">
                    <p class="mb-0 p-2">PANORAMA</p>
                </div>
                <div class="col-md-4 border-end px-0">
                    <?php
                        if($request['lab_asistance_english']=='1'){
                            echo "
                                <p class='mb-0 p-2'>Okay</p>
                            ";
                        }
                        else if($request['lab_asistance_english']=='0'){
                                echo "<p class='mb-0 p-2'>$request[lab_asistance_english_comment]</p>";
                        }
                        else{
                            echo "
                                <p class='mb-0 p-2'>&nbsp;</p>
                            ";
                        }
                    ?>
                </div>
            </div>
            <div class="row border-bottom">
                <div class="col-md-2 border-end py-2 border-start d-flex align-items-center">
                    <p class="mb-0">Law and Justice (Concern Dept.)</p>
                </div>
                <div class="col-md-4 border-end px-0">
                    <p class="mb-0 p-2">Moot Court</p>
                </div>
                <div class="col-md-2 border-end px-0">
                    <p class="mb-0 p-2">NEXUS</p>
                </div>
                <div class="col-md-4 border-end px-0">
                    <?php
                        if($request['lab_asistance_law']=='1'){
                            echo "
                                <p class='mb-0 p-2'>Okay</p>
                            ";
                        }
                        else if($request['lab_asistance_law']=='0'){
                                echo "<p class='mb-0 p-2'>$request[lab_asistance_law_comment]</p>";
                        }
                        else{
                            echo "
                                <p class='mb-0 p-2'>&nbsp;</p>
                            ";
                        }
                    ?>
                </div>
            </div>
            <br>
            <div class="row mt-3 mb-2">
                <div class="col-md-12">
                    <h5 class="text-decoration-underline">b. Thesis/Internship Supervisor:</h5>
                        <?php
                                if($request['thesis_Internship_supervisor']=='1'){
                                    echo "<p>Approved.</p>";
                                }
                                else if($request['thesis_Internship_supervisor']=='0'){
                                    echo "<p>$request[thesis_Internship_supervisor_comment]</p>";
                                }
                                else{
                                    echo "
                                        <p>&nbsp;</p>
                                    ";
                                }
                            ?>
                </div>
            </div>
            <div class="row mt-3 mb-5">
                <div class="col-md-12">
                    <h5 class="text-decoration-underline">c. Head of the Concern Deptertment:</h5>
                        <?php
                            if($request['department_head']=='1'){
                                $signature=getSignature($request['department_head_approvedBy']);
                                echo "<img class='sig' src='../img/signatures/$signature[signature]'>";
                            }
                            else if($request['department_head']=='0'){
                                echo "<p>Application Rejected.</p>";
                            }
                            else{
                                echo "<img class='sig' src='../img/white.PNG'>";
                            }
                        ?>
                </div>
            </div>
            <div class="row mt-3 mb-2">
                <div class="col-md-12">
                    <h5 class="text-decoration-underline mb-3">2. Administration Section:</h5>
                    <div class="row border-bottom border-top">
                        <div class="col-md-2 border-end py-2 border-start d-flex align-items-center">
                            <p class="mb-0">Hall</p>
                        </div>
                        <div class="col-md-5 border-end px-0">
                            <p class="mb-0 p-2">Respective Hall</p>
                        </div>
                        <div class="col-md-5 border-end px-0 d-flex flex-column justify-content-center">
                            <?php
                                if($request['hall_provost']=='1'){
                                    echo "
                                        <p class='mb-0 p-2'>Approved</p>
                                    ";
                                }
                                else if($request['hall_provost']=='0'){
                                        echo "<p class='mb-0 p-2'>$request[hall_provost_comment]</p>";
                                }
                                else{
                                    echo "
                                        <p class='mb-0 p-2'>&nbsp;</p>
                                    ";
                                }
                            ?>
                            
                        </div>
                    </div>
                    <div class="row border-bottom">
                        <div class="col-md-2 border-end py-2 border-start d-flex align-items-center">
                            <p class="mb-0">Liabarian</p>
                        </div>
                        <div class="col-md-5 border-end px-0">
                            <p class="mb-0 p-2">(Must Recieve Thesis/Internship Repot signed by Supervisor and Checked CS/DVD)</p>
                        </div>
                        <div class="col-md-5 border-end px-0 d-flex flex-column justify-content-center">
                            <?php
                                if($request['liabarian']=='1'){
                                    echo "
                                        <p class='mb-0 p-2'>Approved</p>
                                    ";
                                }
                                else if($request['liabarian']=='0'){
                                        echo "<p class='mb-0 p-2'>$request[liabarian_comment]</p>";
                                }
                                else{
                                    echo "
                                        <p class='mb-0 p-2'>&nbsp;</p>
                                    ";
                                }
                            ?>
                            
                        </div>
                    </div>
                    <div class="row border-bottom">
                        <div class="col-md-2 border-end py-2 border-start d-flex align-items-center">
                            <p class="mb-0">Treasurer Office</p>
                        </div>
                        <div class="col-md-5 border-end px-0">
                            <p class="mb-0 p-2 border-bottom">Student Finance</p>
                            <p class="mb-0 p-2">General Accounts</p>
                        </div>
                        <div class="col-md-5 border-end px-0 d-flex flex-column justify-content-center">
                            <?php
                                if($request['finace_section']=='1'){
                                    echo "
                                        <p class='mb-0 p-2 border-bottom'>Approved</p>
                                        <p class='mb-0 p-2'>Approved</p>
                                    ";
                                }
                                else if($request['finace_section']=='0'){
                                        echo "<p class='mb-0 p-2 border-bottom'>Declined</p>
                                        <p class='mb-0 p-2'>Declined</p>";
                                }
                                else{
                                    echo "
                                        <p class='mb-0 p-2 border-bottom'>&nbsp;</p>
                                        <p class='mb-0 p-2'>&nbsp;</p>
                                    ";
                                }
                            ?>
                            
                        </div>
                    </div>
                    <div class="row border-bottom">
                        <div class="col-md-2 border-end py-2 border-start d-flex align-items-center">
                            <p class="mb-0">Registar Office</p>
                        </div>
                        <div class="col-md-5 border-end px-0">
                            <p class="mb-0 p-2 border-bottom">Deputy Registar Admin</p>
                            <p class="mb-0 p-2">Deputy Registar Academic (Student must return ID card)</p>
                        </div>
                        <div class="col-md-5 border-end px-0 d-flex flex-column justify-content-center">
                            <?php
                                if($request['registrar']=='1'){
                                    echo "
                                        <p class='mb-0 p-2 border-bottom'>Approved</p>
                                        <p class='mb-0 p-2'>Approved</p>
                                    ";
                                }
                                else if($request['registrar']=='0'){
                                        echo "<p class='mb-0 p-2 border-bottom'>Declined</p>
                                            <p class='mb-0 p-2'>Declined</p>";
                                }
                                else{
                                    echo "
                                        <p class='mb-0 p-2 border-bottom'>&nbsp;</p>
                                        <p class='mb-0 p-2'>&nbsp;</p>
                                    ";
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="row mt-4 mb-2">
                        <div class="col-md-12">
                            <h5 class="text-decoration-underline">3. Comments of the Registrar:</h5>
                            <?php
                                if($request['registrar']=='1'){
                                    echo "<p>Application is approved.</p>";
                                }
                                else{
                                    echo "<p>$request[registrar_comment]</p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="row mt-4 mb-2">
                        <div class="col-md-12">
                            <h5 class="text-decoration-underline">4. Comments of the Treasurer:</h5>
                            <?php
                                if($request['finace_section']=='1'){
                                    echo "<p>Application is approved.</p>";
                                }
                                else{
                                    echo "<p>$request[finace_section_comment]</p>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- exam controller form -->

        <br><br><br>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-12 position-relative">
                    <h4 class="text-center">American International University-Bangladesh</h4>
                    <h4 class="text-center">Dhaka 1229, Bangladesh</h4>
                    <img class="clearence-logo" style="transform: translatey(-20px);" src="../img/logo.png" alt="logo">
                    <hr class="my-2">
                </div>
            </div>
            <div class="row position-relative">
                <div class="col-md-12">
                    <h5 class="text-center mt-3">Exam Controller's Office</h5>
                    <h5 class="text-center mt-3 mb-3"><u>Acknowledgment of Receipt</u></h5>
                    <p>The following student's application is accepted. Papers will be given as per university rules.</p>
                    <span class="copy-mark">Student Copy</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-5"><h6>Department:</h6></div>
                        <div class="col-md-7"><p><?=strtoupper($request['department'])?></p></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-2"><h6>Name:</h6></div>
                        <div class="col-md-10"><p><?=$request['ename']?></p></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-5"><h6>Roll No:</h6></div>
                        <div class="col-md-7"><p><?=$request['roll']?></p></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-2"><h6>Semester:</h6></div>
                        <div class="col-md-10"><p><?=$studentDetails['semester']?></p></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-5"><h6>Registration No:</h6></div>
                        <div class="col-md-7"><p><?=$request['registration']?></p></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-2"><h6>Result:</h6></div>
                        <div class="col-md-10"><p><?=$request['cgpa']?></p></div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-2"><h6>Application for:</h6></div>
                    <div class="col-md-10"><p><?=$request['certificate_type']?></p></div>
            </div>
            <div class="row mt-4">
                <div class="col-md-3 text-center mt-4">
                    <h6><?=$request['ename']?></h6>
                    <h6 class="signature">Applicant</h6>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3 text-center">
                    <?php
                        if($request['exam_controller_approvedBy']!=''){
                            $signature=getSignature($request['exam_controller_approvedBy']);
                            echo "<img class='sig' src='../img/signatures/$signature[signature]'>";
                        }
                        else{
                            echo "<img class='sig' src='../img/white.PNG'>";
                        }
                    ?>
                    <h6 class="signature">Exam Controller</h6>
                </div>
            </div>
        </div>
        <br><br>
        <hr>
        <br>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-12 position-relative">
                    <h4 class="text-center">American International University-Bangladesh</h4>
                    <h4 class="text-center">Dhaka 1229, Bangladesh</h4>
                    <img class="clearence-logo" style="transform: translatey(-20px);" src="../img/logo.png" alt="logo">
                    <hr class="my-2">
                </div>
            </div>
            <div class="row position-relative">
                <div class="col-md-12">
                    <h5 class="text-center mt-3">Exam Controller's Office</h5>
                    <h5 class="text-center mt-3 mb-3"><u>Acknowledgment of Receipt</u></h5>
                    <p>The following student's application is accepted. Papers will be given as per university rules.</p>
                    <span class="copy-mark">Office Copy</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-5"><h6>Department:</h6></div>
                        <div class="col-md-7"><p><?=strtoupper($request['department'])?></p></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-2"><h6>Name:</h6></div>
                        <div class="col-md-10"><p><?=$request['ename']?></p></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-5"><h6>Roll No:</h6></div>
                        <div class="col-md-7"><p><?=$request['roll']?></p></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-2"><h6>Semester:</h6></div>
                        <div class="col-md-10"><p><?=$studentDetails['semester']?></p></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-5"><h6>Registration No:</h6></div>
                        <div class="col-md-7"><p><?=$request['registration']?></p></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-2"><h6>Result:</h6></div>
                        <div class="col-md-10"><p><?=$request['cgpa']?></p></div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-2"><h6>Application for:</h6></div>
                    <div class="col-md-10"><p><?=$request['certificate_type']?></p></div>
            </div>
            <div class="row mt-4">
                <div class="col-md-3 text-center mt-4">
                    <h6><?=$request['ename']?></h6>
                    <h6 class="signature">Applicant</h6>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3 text-center">
                    <?php
                        if($request['exam_controller_approvedBy']!=''){
                            $signature=getSignature($request['exam_controller_approvedBy']);
                            echo "<img class='sig' src='../img/signatures/$signature[signature]'>";
                        }
                        else{
                            echo "<img class='sig' src='../img/white.PNG'>";
                        }
                    ?>
                    <h6 class="signature">Exam Controller</h6>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="declineModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="declineModal1">Reason For Decline</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" onsubmit="return declineRequestWithComment();" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?=$id?>">
            <div class="row mb-3">
                <div class="col-md-12">
                    <textarea name="comment" id="comment" cols="30" rows="4" class="form-control" required></textarea>
                </div>
            </div>
            <div class="button pb-3">
                <input type="submit" value="Submit" class="btn btn-primary form-control btn-bg-color">
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
