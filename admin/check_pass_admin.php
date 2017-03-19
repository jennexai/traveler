<?php
session_start();
if(isset($_SESSION['admin_id'])){
}else{
  header("location:index.php");
  }
  $user=$_SESSION['admin_id'];

 include('../db/config.php');
 include("../db/sql.inc.php");




$pass=$_GET['opass'];

$query=$con->query("SELECT * FROM `admin` where id='".$user."'") or die(mysql_error());

$row =$query->fetch_assoc();

if($row['pass']==$pass){

	echo "true";
}

else{
   
	echo "false";
	

}





?>