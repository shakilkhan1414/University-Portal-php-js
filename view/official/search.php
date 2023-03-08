<?php 
    require_once "../../model/connection.php";

    $search=$_REQUEST['search'];
    $conn=getConnection();
    $sql="select * from users where id like '%{$search}%' or name like '%{$search}%'";
    $result=$conn->query($sql);
    $users =[];
	while($row = mysqli_fetch_assoc($result)){
	array_push($users, $row); 
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

        if(sizeof($users)==0){
            echo "<tr><td colspan='9'>Nothing Found!</td></tr>";
        }
        else{
            $c=1;
            foreach ($users as $student) {
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
            }

        ?>

        </tbody>
    </table>
</div>

