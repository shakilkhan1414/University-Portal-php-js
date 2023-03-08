<?php 
    require_once "../../model/requestModel.php";
    require_once "../../model/userModel.php";
    session_start();
    $conn=getConnection();

    if(isset($_REQUEST['detete_id'])){
        $id=$_REQUEST['detete_id'];
        $delete_sql="delete from requests where id={$id}";
        $conn->query($delete_sql);
    }

    $allRequests=getAllRequest();
    $requests=[];

    foreach ($allRequests as $singleRequest) {
        if($singleRequest['req_from']==$_SESSION['id']){
            array_push($requests, $singleRequest); 
        }
    }

?>

<h4>My Requests</h4>

<div class="table-responsive" style="width: 100%;">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Created at</th>
                <th>Liabarian</th>
                <th>Hall provost</th>
                <th>Lab Asistance CSE</th>
                <th>Lab Asistance EEE</th>
                <th>Lab Asistance ICE</th>
                <th>Lab Asistance CE</th>
                <th>Department Head</th>
                <th>Finace Section</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody style="background: white;">

        <?php 

        if(sizeof($requests)==0){
            echo "<tr><td colspan='9'>No Request Found!</td></tr>";
        }
        else{
            $c=1;
            foreach ($requests as $request) {
                $liabarian=$request['liabarian'];
                $hall_provost=$request['hall_provost'];
                $lab_asistance_cse=$request['lab_asistance_CSE'];
                $lab_asistance_eee=$request['lab_asistance_EEE'];
                $lab_asistance_ice=$request['lab_asistance_ICE'];
                $lab_asistance_ce=$request['lab_asistance_CE'];
                $department_head=$request['department_head'];
                $finace_section=$request['finace_section'];
    
                if($liabarian==''){
                    $liabarianStatus="<a class='btn btn-warning btn-sm status'>Pending</a>";
                }
                else if($liabarian=='0'){
                    $liabarianStatus="<a class='btn btn-danger btn-sm status'>Declined</a>";
                }
                else if($liabarian=='1'){
                    $liabarianStatus="<a class='btn btn-success btn-sm status'>Approved</a>";
                }
    
                if($hall_provost==''){
                    $hallProvostStatus="<a class='btn btn-warning btn-sm status'>Pending</a>";
                }
                else if($hall_provost=='0'){
                    $hallProvostStatus="<a class='btn btn-danger btn-sm status'>Declined</a>";
                }
                else if($hall_provost=='1'){
                    $hallProvostStatus="<a class='btn btn-success btn-sm status'>Approved</a>";
                }
    
                if($lab_asistance_cse==''){
                    $labAsistanceStatusCSE="<a class='btn btn-warning btn-sm status'>Pending</a>";
                }
                else if($lab_asistance_cse=='0'){
                    $labAsistanceStatusCSE="<a class='btn btn-danger btn-sm status'>Declined</a>";
                }
                else if($lab_asistance_cse=='1'){
                    $labAsistanceStatusCSE="<a class='btn btn-success btn-sm status'>Approved</a>";
                }

                if($lab_asistance_eee==''){
                    $labAsistanceStatusEEE="<a class='btn btn-warning btn-sm status'>Pending</a>";
                }
                else if($lab_asistance_eee=='0'){
                    $labAsistanceStatusEEE="<a class='btn btn-danger btn-sm status'>Declined</a>";
                }
                else if($lab_asistance_eee=='1'){
                    $labAsistanceStatusEEE="<a class='btn btn-success btn-sm status'>Approved</a>";
                }

                if($lab_asistance_ice==''){
                    $labAsistanceStatusICE="<a class='btn btn-warning btn-sm status'>Pending</a>";
                }
                else if($lab_asistance_ice=='0'){
                    $labAsistanceStatusICE="<a class='btn btn-danger btn-sm status'>Declined</a>";
                }
                else if($lab_asistance_ice=='1'){
                    $labAsistanceStatusICE="<a class='btn btn-success btn-sm status'>Approved</a>";
                }

                if($lab_asistance_ce==''){
                    $labAsistanceStatusCE="<a class='btn btn-warning btn-sm status'>Pending</a>";
                }
                else if($lab_asistance_ce=='0'){
                    $labAsistanceStatusCE="<a class='btn btn-danger btn-sm status'>Declined</a>";
                }
                else if($lab_asistance_ce=='1'){
                    $labAsistanceStatusCE="<a class='btn btn-success btn-sm status'>Approved</a>";
                }
    
                if($department_head==''){
                    $departmentHeadStatus="<a class='btn btn-warning btn-sm status'>Pending</a>";
                }
                else if($department_head=='0'){
                    $departmentHeadStatus="<a class='btn btn-danger btn-sm status'>Declined</a>";
                }
                else if($department_head=='1'){
                    $departmentHeadStatus="<a class='btn btn-success btn-sm status'>Approved</a>";
                }
    
                if($finace_section==''){
                    $finaceSectionStatus="<a class='btn btn-warning btn-sm status'>Pending</a>";
                }
                else if($finace_section=='0'){
                    $finaceSectionStatus="<a class='btn btn-danger btn-sm status'>Declined</a>";
                }
                else if($finace_section=='1'){
                    $finaceSectionStatus="<a class='btn btn-success btn-sm status'>Approved</a>";
                }
    
                echo "<tr>
                            <td>$c</td>
                            <td>$request[created_at]</td>
                            <td>$liabarianStatus</td>
                            <td>$hallProvostStatus</td>
                            <td>$labAsistanceStatusCSE</td>
                            <td>$labAsistanceStatusEEE</td>
                            <td>$labAsistanceStatusICE</td>
                            <td>$labAsistanceStatusCE</td>
                            <td>$departmentHeadStatus</td>
                            <td>$finaceSectionStatus</td>
                            <td>
                            <button class='btn btn-danger btn-sm btn-gap' onclick='deleteRequest($request[id])'>Delete</button>
                            <button class='btn btn-primary btn-sm' onclick='viewSingleRequestStudent($request[id])'>View</button>
                            </td>
                        </tr>";
    
                    $c++;
                }
            }

        ?>

        </tbody>
    </table>
</div>

