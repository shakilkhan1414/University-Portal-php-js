<?php
	
	require_once('connection.php');

	function getAllRequest(){
		$conn = getConnection();
		$sql = "select * from requests";
		$result = mysqli_query($conn, $sql);
		$requests =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($requests, $row); 
		}

		return $requests;
	}

	function getRequestById($id){

		$conn = getConnection();

		$sql = "select * from requests where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function addRequest($request){

		$conn = getConnection();
		$date=date("Y-m-d");
		$sql = "insert into requests values('','{$request['req_from']}','{$request['bname']}','{$request['ename']}','{$request['bfathersName']}','{$request['efathersName']}','{$request['address']}','{$request['phone']}','{$request['roll']}','{$request['registration']}','{$request['certificate_type']}','{$request['department']}','{$request['sesson']}','{$request['examYear']}','{$request['cgpa']}','{$request['resultDate']}','{$request['bankDetails']}','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','{$date}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getSignature($id){
		$conn = getConnection();
		$sql = "select * from signatures where user_id ='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

?>