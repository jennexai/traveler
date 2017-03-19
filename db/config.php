<?php
error_reporting(0);

$db_user='root';
$db_pass='';
$db_name='traveler';

$con = mysqli_connect('localhost',$db_user,$db_pass,$db_name) or mysqli_error();
//mysqli_select_db($db_name,$con) or die("Databse Selection Error");  
?>