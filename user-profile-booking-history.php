
<?php session_start();
if((isset($_SESSION['id'])) && (isset($_SESSION['email']))){
}else{
  header("location:index.php");
  }
include("db/config.php");
include("db/sql.inc.php");?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Traveler - Booking History</title>


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
       <?php include('include/header.php');?>

        <div class="container">
            <h1 class="page-title">Booking History</h1>
        </div>




        <div class="container">
            <div class="row">
               
            <?php include('profile_sidebar.php');?>

                <div class="col-md-9">
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />Show only current trip</label>
                    </div>
                    <table class="table table-bordered table-striped table-booking-history">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Order Date</th>
                                <!-- <th>Execution Date</th> -->
                                <th>Cost</th>
                               <!--  <th>Current</th> -->

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
<?php  $query = $con->query("SELECT * FROM  `order_table` WHERE `u_id`='".$_SESSION['id']."'") or  die(mysqli_error($con));
     
     $rowcount=mysqli_num_rows($query);
    
     while($data=$query->fetch_assoc()){?>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-plane"></i><small>flight</small>
                                </td>
                                <td class="booking-history-title"><?php echo $data['form']." <strong> To </strong> ".$data['To_place'];?></td>
                                <td><?php echo $data['form'];?></td>
                                <td><?php echo $data['date'];?></td>
                                <!-- <td>4/25/2014</td> -->
                                <td><?php echo $data['amount'];?></td>
                                <!-- <td class="text-center"><i class="fa fa-check"></i>
                                </td> -->
                                <td class="text-center">
                                <?php if($data['amount'] !=''){ ?><a class="btn btn-default btn-sm" href="#">Pay</a> | <?php  }?><a class="btn btn-default btn-sm" href="#">Cancel</a>
                                </td>
                            </tr>
                            <?php } ?>
                            <!-- <tr>
                                <td class="booking-history-type"><i class="fa fa-building-o"></i><small>hotel</small>
                                </td>
                                <td class="booking-history-title">InterContinental New York Barclay</td>
                                <td>New york City</td>
                                <td>4/12/2014</td>
                                <td>4/25/2014 <i class="fa fa-long-arrow-right"></i> 4/30/2014</td>
                                <td>$1200</td>
                                <td class="text-center"><i class="fa fa-check"></i>
                                </td>
                                <td class="text-center"><a class="btn btn-default btn-sm" href="#">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-dashboard"></i><small>car</small>
                                </td>
                                <td class="booking-history-title">Maserati GranTurismo</td>
                                <td>New york City</td>
                                <td>4/12/2014</td>
                                <td>4/25/2014 <i class="fa fa-long-arrow-right"></i> 4/30/2014</td>
                                <td>$500</td>
                                <td class="text-center"><i class="fa fa-check"></i>
                                </td>
                                <td class="text-center"><a class="btn btn-default btn-sm" href="#">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-bolt"></i><small>activity</small>
                                </td>
                                <td class="booking-history-title">Central Park Trip</td>
                                <td>New york City</td>
                                <td>4/12/2014</td>
                                <td>4/27/2014</td>
                                <td>$0</td>
                                <td class="text-center"><i class="fa fa-check"></i>
                                </td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-bolt"></i><small>activity</small>
                                </td>
                                <td class="booking-history-title">Music Festival</td>
                                <td>New york City</td>
                                <td>4/12/2014</td>
                                <td>4/28/2014</td>
                                <td>$100</td>
                                <td class="text-center"><i class="fa fa-check"></i>
                                </td>
                                <td class="text-center"><a class="btn btn-default btn-sm" href="#">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-bolt"></i><small>activity</small>
                                </td>
                                <td class="booking-history-title">Adrenaline Madness</td>
                                <td>New york City</td>
                                <td>4/12/2014</td>
                                <td>4/29/2014</td>
                                <td>$210</td>
                                <td class="text-center"><i class="fa fa-check"></i>
                                </td>
                                <td class="text-center"><a class="btn btn-default btn-sm" href="#">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-plane"></i><small>flight</small>
                                </td>
                                <td class="booking-history-title">London to Bali</td>
                                <td>Bali</td>
                                <td>2/12/2014</td>
                                <td>2/20/2014</td>
                                <td>$500</td>
                                <td class="text-center"><i class="fa fa-times"></i>
                                </td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-home"></i><small>rental</small>
                                </td>
                                <td class="booking-history-title">Modern Chic 3BR Villa Fanisa</td>
                                <td>Bali</td>
                                <td>2/12/2014</td>
                                <td>2/20/2014 <i class="fa fa-long-arrow-right"></i> 2/23/2014</td>
                                <td>$800</td>
                                <td class="text-center"><i class="fa fa-times"></i>
                                </td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-plane"></i><small>flight</small>
                                </td>
                                <td class="booking-history-title">London to San Fancisco</td>
                                <td>San Fancisco</td>
                                <td>1/01/2014</td>
                                <td>1/05/2014</td>
                                <td>$423</td>
                                <td class="text-center"><i class="fa fa-times"></i>
                                </td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-building-o"></i><small>hotel</small>
                                </td>
                                <td class="booking-history-title">Wellington Hotel</td>
                                <td>San Fancisco</td>
                                <td>1/01/2014</td>
                                <td>1/05/2014 <i class="fa fa-long-arrow-right"></i> 1/15/2014</td>
                                <td>$850</td>
                                <td class="text-center"><i class="fa fa-times"></i>
                                </td>
                                <td class="text-center"></td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        <div class="gap"></div>
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


