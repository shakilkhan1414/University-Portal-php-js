<?php 
    require_once "../../model/userModel.php";
    $conn=getConnection();

    if(isset($_REQUEST['detete_id'])){
        $id=$_REQUEST['detete_id'];
        $delete_sql="delete from users where id={$id}";
        $conn->query($delete_sql);
    }

    $users=getAllUser();
    $students=[];
    foreach ($users as $user) {
        if($user['user_role']=='student'){
            array_push($students, $user); 
        }
    }

?>

<h4>Students</h4>

<div class="table-responsive" style="width: 100%;">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Image</th>
                <th>Created at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody style="background: white;">

        <?php 

        $c=1;
        foreach ($students as $student) {
            echo "<tr>
                        <td>$c</td>
                        <td>$student[id]</td>
                        <td>$student[name]</td>
                        <td>$student[email]</td>
                        <td>$student[gender]</td>
                        <td>$student[dob]</td>
                        <td><img src='../img/$student[profile_image]'></td>
                        <td>$student[created_at]</td>
                        <td>
                            <button class='view btn-gap' onclick='viewStudent($student[id])'>View</button>
                            <button class='delete' onclick='deleteStudent($student[id])'>Delete</button>
                        </td>
                    </tr>";

                $c++;
            }

        ?>

        </tbody>
    </table>
</div>

