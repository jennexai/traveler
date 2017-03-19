<?php session_start();
include("../db/config.php");
include("../db/sql.inc.php");
mysqli_query($con,"update temp_reservation set pnr='".$_POST['pnr_number']."', pnr_status='".$_POST['pnr_status']."' where id='".$_POST['id']."'") or die(mysqli_error($con));
?>
