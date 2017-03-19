<?php
	include("../db/config.php");
	session_start();
	if(isset($_POST['check_status'])){
	
		$_SESSION['selected_flight_data'] = $_POST['selected_flight_data'];
		// procede as guest login
		if($_SESSION['mobile'] != null){
			echo "1";
		}else{
			$_SESSION['selected_flight_data'] = $_REQUEST['selected_flight_data'];			
			echo "0";			
		}
	}
	
	if(isset($_POST['register'])){
	 
		mysqli_query($con,"insert into tbl_user set 
			fname='".$_POST['name']."',
			email='".$_POST['email']."',
			mobile='".$_POST['phone']."',
			pass='".$_POST['password']."'
		");
		$_SESSION['username'] 	= $_POST['name'];
		$_SESSION['mobile'] 	= $_POST['phone'];
		echo "1";
	}
	
	
		
	if(isset($_POST['signin'])){
	 
		$sql = mysqli_query($con,"select * from tbl_user where 
			email='".$_POST['email']."' AND
			pass='".$_POST['password']."'
		");
		$row = mysqli_fetch_array($sql);		 
		if($row['fname'] != ""){
			$_SESSION['username'] = $row['fname'];
			$_SESSION['mobile'] = $row['mobile'];
			echo "1";
		}else{ 
			echo "0";
		}
	}