<?php include("include/header.php");?> 
<?php include("db/config.php");?> 
<?php //print_r($_REQUEST);die; ?>
<?php 
session_start();
	$status = $_REQUEST['f_code'];
	if($status =="Ok"){
		$sql= mysqli_query($con,"
			update temp_reservation set
			payment_status='done'
			where id='".$_SESSION['id']."'
		") or die(mysqli_error($con));		
	}else{
		$sql= mysqli_query($con,"
			update temp_reservation set
			payment_status='failed'
			where id='".$_SESSION['id']."'
		") or die(mysqli_error($con));	
	}
	$mmp_txn = $_REQUEST['mmp_txn'];
?>
<?php error_reporting(0); ?>

<?php session_start(); ?> 
<?php 
	$fData = explode("-",$_SESSION['selected_flight_data']);
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Traveler - Success payment</title>


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


</head>

<body>

    <!-- FACEBOOK WIDGET -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
        <div class="gap"></div>


        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
				<?php if($status != "Ok"){ ?>
				<br><br>
					<div class="alert alert-danger">
					<br><br><br>
						<center><strong>Error: </strong> Paymnet Failed!</center>
					<br><br><br>
					</div><br><br><br>
				<?php }else{ ?>
                    <i class="fa fa-check round box-icon-large box-icon-center box-icon-success mb30"></i>	
                    <h2 class="text-center"><?php echo ucfirst($_SESSION['username']); ?>, your payment was successful!</h2>
                    <h5 class="text-center mb30">Booking details has been send to <?php echo $_REQUEST['udf2']; ?>
						<br>
						<br>
						<div class='alert alert-info'><strong>PNR confirmed : </strong><span style='color:green'><?php echo $_SESSION['pnr']; ?></span></div>
					</h5>
                    <ul class="order-payment-list list mb30">
                        <li>
                            <div class="row">
                                <div class="col-xs-12">
								<div class="col-md-5">
                                    <h5>
										<i class="fa fa-plane"></i> Flight from 
										 
										<?php 
											$sqldes = $con->query("SELECT * FROM  `tbl_citycode` WHERE `code`='".$fData[2]."'") or  die(mysqli_error($con)); 
											$rowcount=mysqli_num_rows($sqldes);
											$datades1=$sqldes->fetch_assoc();
											$all = explode(",",$datades1['value']);
											$count =  count($all);
											echo ucwords(strtolower($all[$count-2].",".$all[$count-1]));
										?>
										<br><small style='font-size:12px;margin-left:-25px'>(Terminal : <?php echo ucwords(strtolower($datades1['value'])); ?>)</small><br>
									</div>
									<div class="col-md-6">
										
										<?php 
											$sqldes = $con->query("SELECT * FROM  `tbl_citycode` WHERE `code`='".$fData[3]."'") or  die(mysqli_error($con)); 
											$rowcount=mysqli_num_rows($sqldes);
											$datades=$sqldes->fetch_assoc();
											$all = explode(",",$datades['value']);
											$count =  count($all);
											echo ucwords(strtolower($all[$count-2].",".$all[$count-1]));											
										?>	<br>									
										<small style='font-size:12px;margin-left:-25px'>(Terminal : <?php echo ucwords(strtolower($datades['value'])); ?>)</small>
										
									</h5>
									</div>
									<div class="col-md-1">
									 <p class="text-right"><span class="text-lg"><?php echo $_REQUEST['amt'] ?></span></p>
                                    <p class="text-right"><span class="text-md">(Date:<?php echo $fData[4]; ?>)</span></p>
									</div>
                                </div>
                                 
                            </div>
                        </li>
                       
                    </ul>
					<?php } ?>
                    <h4 class="text-center">You might also need in New York</h4>
                    <ul class="list list-inline list-center">
                        <li><a class="btn btn-primary" href="#"><i class="fa fa-building-o"></i> Hotels</a>
                            <p class="text-center lh1em mt5"><small>398 offers<br /> from $139</small>
                            </p>
                        </li>
                        <li><a class="btn btn-primary" href="#"><i class="fa fa-home"></i> Rentlas</a>
                            <p class="text-center lh1em mt5"><small>229 offers<br /> from $143</small>
                            </p>
                        </li>
                        <li><a class="btn btn-primary" href="#"><i class="fa fa-dashboard"></i> Cars</a>
                            <p class="text-center lh1em mt5"><small>180 offers<br /> from $73</small>
                            </p>
                        </li>
                        <li><a class="btn btn-primary" href="#"><i class="fa fa-bolt"></i> Activities</a>
                            <p class="text-center lh1em mt5"><small>274 offers<br /> from $131</small>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="gap"></div>
        </div>



        <footer id="main-footer">
            <div class="container">
                <div class="row row-wrap">
                    <div class="col-md-3">
                        <a class="logo" href="index.html">
                            <img src="img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                        </a>
                        <p class="mb20">Booking, reviews and advices on hotels, resorts, flights, vacation rentals, travel packages, and lots more!</p>
                        <ul class="list list-horizontal list-space">
                            <li>
                                <a class="fa fa-facebook box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-google-plus box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-linkedin box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-pinterest box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4>Newsletter</h4>
                        <form>
                            <label>Enter your E-mail Address</label>
                            <input type="text" class="form-control">
                            <p class="mt5"><small>*We Never Send Spam</small>
                            </p>
                            <input type="submit" class="btn btn-primary" value="Subscribe">
                        </form>
                    </div>
                    <div class="col-md-2">
                        <ul class="list list-footer">
                            <li><a href="#">About US</a>
                            </li>
                            <li><a href="#">Press Centre</a>
                            </li>
                            <li><a href="#">Best Price Guarantee</a>
                            </li>
                            <li><a href="#">Travel News</a>
                            </li>
                            <li><a href="#">Jobs</a>
                            </li>
                            <li><a href="#">Privacy Policy</a>
                            </li>
                            <li><a href="#">Terms of Use</a>
                            </li>
                            <li><a href="#">Feedback</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4>Have Questions?</h4>
                        <h4 class="text-color">+1-202-555-0173</h4>
                        <h4><a href="#" class="text-color">support@traveler.com</a></h4>
                        <p>24/7 Dedicated Customer Support</p>
                    </div>

                </div>
            </div>
        </footer>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/slimmenu.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-timepicker.js"></script>
        <script src="js/nicescroll.js"></script>
        <script src="js/dropit.js"></script>
        <script src="js/ionrangeslider.js"></script>
        <script src="js/icheck.js"></script>
        <script src="js/fotorama.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="js/typeahead.js"></script>
        <script src="js/card-payment.js"></script>
        <script src="js/magnific.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/tweet.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/gridrotator.js"></script>
        <script src="js/custom.js"></script>
    </div>
</body>

</html>


