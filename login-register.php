<?php 
	session_start();
?>
<!DOCTYPE HTML>
<html class="full">

<head>
    <title>Traveler - Login register</title>


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

<body class="full">

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

        <div class="full-page">
            <div class="bg-holder full">
                <div class="bg-mask"></div>
                <div class="bg-img" style="background-image:url(img/1280x852.png);"></div>
                <div class="bg-holder-content full text-white">
                    <a class="logo-holder" href="index.html">
                        <img src="img/logo-white.png" alt="Image Alternative text" title="Image Title" />
                    </a>
                    <div class="full-center">
                        <div class="container">
                            <div class="row row-wrap" data-gutter="60">
                                <div class="col-md-4">
                                    <div class="visible-lg">
                                        <h3 class="mb15">Welcome to Traveler</h3>
                                        <p>Ultrices lacus erat mattis nam sem porta nascetur luctus nunc litora diam ornare maecenas et phasellus molestie lorem habitant ultricies condimentum dignissim interdum erat sit praesent penatibus mattis pharetra penatibus</p>
                                        <p>Sodales amet consectetur consectetur curae placerat consectetur penatibus fusce sagittis</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h3 class="mb15">Login</h3>
                                    <form id="signin_frm">
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                            <label>Username or email</label>
                                            <input class="form-control" name="email" placeholder="e.g. johndoe@gmail.com" type="text" />
                                        </div>
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                            <label>Password</label>
                                            <input class="form-control" name="password" type="password" placeholder="my secret password" />
                                        </div>
                                        <input class="btn btn-primary" type="button" value="Sign in"  id="signin" />
                                    </form>
                                </div>
                                <div class="col-md-4">
                                    <h3 class="mb15">New To Traveler?</h3>
                                    <form id="register_frm">
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                            <label>Full Name</label>
                                            <input class="form-control" name="name" placeholder="e.g. John Doe" type="text" />
                                        </div>
										<div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                            <label>Phone</label>
                                            <input class="form-control" name="phone" placeholder="e.g. John Doe" type="number" />
                                        </div>
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-envelope input-icon input-icon-show"></i>
                                            <label>Email</label>
                                            <input class="form-control" name="email" placeholder="e.g. johndoe@gmail.com" type="text" />
                                        </div>
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                            <label>Password</label>
                                            <input class="form-control" name="password" type="password" placeholder="my secret password" />
                                        </div>
                                        <input class="btn btn-primary register"  id="register" type="button" value="Sign up for Traveler" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="footer-links">
                        <li><a href="#">About</a>
                        </li>
                        <li><a href="#">Help</a>
                        </li>
                        <li><a href="#">Hot Deals</a>
                        </li>
                        <li><a href="#">Popular Locations</a>
                        </li>
                        <li><a href="#">Cheap Flights</a>
                        </li>
                        <li><a href="#">Business</a>
                        </li>
                        <li><a href="#">Media</a>
                        </li>
                        <li><a href="#">Developers</a>
                        </li>
                        <li><a href="#">Advertise</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
		
	<?php if(!empty($_SESSION['selected_flight_data'])){ ?>
		<p style="display:none" id="isPreSelectedFlights">1</p>
	<?php ;}?>


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
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    </div>
</body>

</html>
<script>
/** signup */
$(document).ready(function(){
	$("#register").on("click", function(e){
		e.preventDefault();
		$("#proc").remove();
		$(this).after("<br><span id='proc'>Processing...</span>"); 
		 $.ajax({
				url:"helpers/login_helper.php",
				type:"post",
				data:"register=1&"+$("#register_frm").serialize(),
				success:function(resp){  
					setTimeout(function(){
						if(resp == 1){
							$("#proc").html("<span style='color:#e27513'>Successfull! Redirecting.....</span>");
							setTimeout(function(){
								window.location.href = "user-profile-wishlist.php";
							},500);
						} 
					},1000);
					
				}
			})
	})
})

/** sign in */
$(document).ready(function(){
	$("#signin").on("click", function(e){
		e.preventDefault();
		$("#proc").remove();
		$(this).after("<br><span id='proc'>Processing...</span>"); 		
		 $.ajax({
				url:"helpers/login_helper.php",
				type:"post",
				data:"signin=1&"+$("#signin_frm").serialize(),
				success:function(resp){ 
					setTimeout(function(){
						if(resp == 1){
							$("#proc").html("<span style='color:#e27513'>Redirecting.....</span>");
							setTimeout(function(){
								window.location.href = "user-profile-wishlist.php";
							},500);
						}else{
							$("#proc").html("<span style='color:#e27513' id='inv_msg'>Invalid login attempts made.....</span>");
						}
					},1000);
					
				}
			})
	})
})
</script>