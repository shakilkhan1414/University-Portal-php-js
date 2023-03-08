<?php
	
	require_once('connection.php');

	function getStudentDetailsById($id){

		$conn = getConnection();

		$sql = "select * from student_details where student_id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function updateStudentDetails($user){
		$conn = getConnection();
		$sql = "update student_details set department='{$user['department']}', admission_date='{$user['admissionDate']}', semester='{$user['semester']}', completed_credit='{$user['completedCredit']}', cgpa='{$user['cgpa']}', balance='{$user['balance']}' where student_id ='{$user['id']}'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>