<?php session_start();
      include("db/config.php");
      include("db/sql.inc.php");?>
<!DOCTYPE html>
<html>
<head>
    <title>Traveler - Flight payment</title>


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/mystyles.css">
    <script src="js/modernizr.js"></script>

<style type="text/css">
 .circle {
         background: white;
    border: 2px solid #8BC34A;
    border-radius: 200px;
    color: white;
    height: 113px;
    font-weight: bold;
    width: 113px;
    display: table;
    margin: 20px auto;
}
</style>
</head>
<body style="    overflow-x: hidden;">
<!--header-->
<?php include("include/header.php");
?>
<!--/header--> 
<div class="row">

<div class="col-md-3"></div>
<div class="col-md-6">
  <center>
     <div class="circle"><center><i class="fa fa-check" aria-hidden="true" style="color:green;font-size: 72px;
    margin: 18px 0 0 0;"></i></center></div>
  </center>


      <center><h1 style="color:green;color: #151212;font-size: 77px; font-weight: 700;font-family: cursive;">Thank You!</h1></center>
      <br>
      <center><p style="font-size: x-large;font-family: cursive;color: #151212;">Your booking has been successfully Received.</p></center>
     <center> <p style="font-size: x-large;font-family: cursive;color: #151212;">Our support team will contact soon.</p></center>
    </div>
   <div class="col-md-3"></div>
</div>

</body>
