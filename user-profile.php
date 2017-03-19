
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
    <title>Traveler - Travel Profile</title>


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
            <h1 class="page-title">Travel Profile</h1>
        </div>




        <div class="container">
            <div class="row">
                 <?php include('profile_sidebar.php');?>
                <div class="col-md-9">
                    <h4>Total Traveled</h4>
                    <ul class="list list-inline user-profile-statictics mb30">
                        <li><i class="fa fa-dashboard user-profile-statictics-icon"></i>
                            <h5>12540</h5>
                            <p>Miles</p>
                        </li>
                        <li><i class="fa fa-globe user-profile-statictics-icon"></i>
                            <h5>2%</h5>
                            <p>World</p>
                        </li>
                        <li><i class="fa fa-building-o user-profile-statictics-icon"></i>
                            <h5>15</h5>
                            <p>Cityes</p>
                        </li>
                        <li><i class="fa fa-flag-o user-profile-statictics-icon"></i>
                            <h5>3</h5>
                            <p>Countries</p>
                        </li>
                        <li><i class="fa fa-plane user-profile-statictics-icon"></i>
                            <h5>20</h5>
                            <p>Trips</p>
                        </li>
                    </ul>
                    <div id="map-canvas" style="width:100%; height:400px;"></div>
                </div>
            </div>
        </div>



        <div class="gap"></div>
        <?php include("include/footer.php");?>
</body>

</html>


