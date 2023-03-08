<?php
	
	require_once('connection.php');

	function getAllRegistration(){
		$conn = getConnection();
		$sql = "select * from registration";
		$result = mysqli_query($conn, $sql);
		$requests =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($requests, $row); 
		}

		return $requests;
	}

	function getRegistrationById($id){

		$conn = getConnection();

		$sql = "select * from registration where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getSubjectById($id){

		$conn = getConnection();

		$sql = "select * from subjects where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getSubjectBySemester($semester){

		$conn = getConnection();

		$sql = "select * from subjects where semester='{$semester}'";
		$result = mysqli_query($conn, $sql);
		$subjects =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($subjects, $row); 
		}
		return $subjects;
	}

	function addRegistration($request){

		$conn = getConnection();
		$date=date("Y-m-d");
		$sql = "insert into registration values('','{$request['student_id']}','{$request['registered_subjects']}','{$request['name']}','{$request['studentid']}','{$request['fname']}','{$request['mname']}','{$request['program']}','{$request['department']}','{$request['registration']}','{$request['year']}','{$request['semester']}','{$request['sesson']}','{$request['presentAddress']}','{$request['permanentAddress']}','{$request['nationalID']}','{$request['nationality']}','{$request['email']}','{$request['bloodGroup']}','{$request['residential']}','{$request['hallName']}','','','','','','','','','','','{$date}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}



?>