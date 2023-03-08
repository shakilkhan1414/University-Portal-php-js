<?php 
    require_once "../../model/registrationModel.php";
    require_once "../../model/userModel.php";
    session_start();
    $conn=getConnection();

    if(isset($_REQUEST['detete_id'])){
        $id=$_REQUEST['detete_id'];
        $delete_sql="delete from registration where id={$id}";
        $conn->query($delete_sql);
    }

    $registrations=getAllRegistration();

?>

<h4>Registrations</h4>

<div class="table-responsive" style="width: 100%;">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Created at</th>
                <th>Hall Provost</th>
                <th>Finace Department</th>
                <th>Registrar</th>
                <th>Course Co-ordinator</th>
                <th>Department Head</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody style="background: white;">

        <?php 

        if(sizeof($registrations)==0){
            echo "<tr><td colspan='9'>No Registation Found!</td></tr>";
        }
        else{
            $c=1;
            foreach ($registrations as $registration) {
                $hall_provost=$registration['hall_provost'];
                $finace_department=$registration['finace_department'];
                $registrar=$registration['registrar'];
                $course_co_ordinator=$registration['course_coOrdinator'];
                $department_head=$registration['department_head'];
    
                if($hall_provost==''){
                    $hall_provostStatus="<a class='btn btn-warning btn-sm status'>Pending</a>";
                }
                else if($hall_provost=='0'){
                    $hall_provostStatus="<a class='btn btn-danger btn-sm status'>Declined</a>";
                }
                else if($hall_provost=='1'){
                    $hall_provostStatus="<a class='btn btn-success btn-sm status'>Approved</a>";
                }
    
                if($finace_department==''){
                    $finace_departmentStatus="<a class='btn btn-warning btn-sm status'>Pending</a>";
                }
                else if($finace_department=='0'){
                    $finace_departmentStatus="<a class='btn btn-danger btn-sm status'>Declined</a>";
                }
                else if($finace_department=='1'){
                    $finace_departmentStatus="<a class='btn btn-success btn-sm status'>Approved</a>";
                }
    
                if($registrar==''){
                    $registrarStatus="<a class='btn btn-warning btn-sm status'>Pending</a>";
                }
                else if($registrar=='0'){
                    $registrarStatus="<a class='btn btn-danger btn-sm status'>Declined</a>";
                }
                else if($registrar=='1'){
                    $registrarStatus="<a class='btn btn-success btn-sm status'>Approved</a>";
                }
    
                if($course_co_ordinator==''){
                    $course_co_ordinatorStatus="<a class='btn btn-warning btn-sm status'>Pending</a>";
                }
                else if($course_co_ordinator=='0'){
                    $course_co_ordinatorStatus="<a class='btn btn-danger btn-sm status'>Declined</a>";
                }
                else if($course_co_ordinator=='1'){
                    $course_co_ordinatorStatus="<a class='btn btn-success btn-sm status'>Approved</a>";
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

                $user=getUserById($_SESSION['id']);
                $userType=$user['user_role'];
    
                $currentUser=$registration[$userType];
                if($currentUser==''){
                    $action="<button class='btn btn-success btn-sm btn-gap' onclick='approveRegistration($registration[id])'>Approve</button>
                    <button class='btn btn-danger btn-sm btn-gap' onclick='declineRegistration($registration[id])'>Decline</button>
                    <button class='btn btn-primary btn-sm' onclick='viewSingleRegistration($registration[id])'>View</button>";
                }
                else{
                    $action="<button class='btn btn-primary btn-sm' onclick='viewSingleRegistration($registration[id])'>View</button>";
                }
    
                echo "<tr>
                            <td>$c</td>
                            <td>$registration[created_at]</td>
                            <td>$hall_provostStatus</td>
                            <td>$finace_departmentStatus</td>
                            <td>$registrarStatus</td>
                            <td>$course_co_ordinatorStatus</td>
                            <td>$departmentHeadStatus</td>
                            <td>
                                $action
                            </td>
                        </tr>";
    
                    $c++;
                }
            }

        ?>

        </tbody>
    </table>
</div>

