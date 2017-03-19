<?php 
if(isset($_POST['login'])){

    $email=$_POST['email'];
    $pass=$_POST['pass'];

     $query = $con->query("SELECT *
            FROM  `tbl_user` 
            WHERE `pass` = '$pass'
            AND `email` = '$email'");
 
      $count=mysqli_num_rows($query);

    if($count>0){
        $res=$query->fetch_assoc();
           
           session_start();
            $_SESSION['email']=$res['email'];
            $_SESSION['id']=$res['u_id'];
          
            header("location:user-profile.php");
          }else{
            $error=2;
          }
   }
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Traveler - Search for Flights</title>


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
   <!--  <script src="js/jquery.js"></script> -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <script src="js/validation.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script src="js/modernizr.js"></script>
<link rel="stylesheet" href="css/animate.css"> 
<link rel="stylesheet" href="css/navbar.css"> 
<style type="text/css">
        ul.dropdown-lr {
  width: 300px;
}

/* mobile fix */
@media (max-width: 768px) {
    .dropdown-lr h3 {
        color: #ccc;
    }
    .dropdown-lr label {
        color: #ccc;
    }
  }
 
 .menubar>li>a {
   color: #ccc !important;
   }
  .menubar>li>a:focus, .menubar>li>a:hover {
    text-decoration: none;
    background-color:#423c3d;
   /* width: 86px!important; */
    height: 43px !important;
      -webkit-transform:scale(1.25); /* Safari and Chrome */
    -moz-transform:scale(1.25); /* Firefox */
    -ms-transform:scale(1.25); /* IE 9 */
    -o-transform:scale(1.25); /* Opera */
     transform:scale(1.25);
   }
  .menubar .open>a, .menubar .open>a:focus, .menubar .open>a:hover {
    background-color:#423c3d;
    height: 43px !important;
  }
.error{ color: red;
    
}
    </style>
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
        <header id="main-header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a class="logo" href="index.php">
                                <img src="img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                            </a>
                        </div>
                        <div class="col-md-3 col-md-offset-2">
                            <form class="main-header-search">
                                <div class="form-group form-group-icon-left">
                                    <i class="fa fa-search input-icon"></i>
                                    <input type="text" class="form-control">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <div class="top-user-area clearfix">
                                
                                


                           
                    <?php if(isset($_SESSION['email'])){?>
                       <ul class="top-user-area-list list list-horizontal list-border">
                   <li class="top-user-area-avatar ">
                         <a href="user-profile.html">
                            <img class="origin round" src="img/40x40.png" alt="Image Alternative text" title="AMaze" /> <?php if(isset($_SESSION['email'])){ echo $_SESSION['email']; } ?></a>
                                    </li>
 <!--  <ul class="dropdown-menu">
    <li><a href="log_out.php">Logout</a></li>
   
  </ul> -->
  <li><a href="user-profile.php">Profile</a></li>
  <li><a href="logout.php">Sign Out</a></li>
  </ul>

                        <?php } else{?>
                        <ul class="top-user-area-list list list-horizontal list-border nav navbar-nav menubar">
                        <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Log In <span class="caret"></span></a>
                        <?php }?>
                        <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu" style=" margin: 4px 0px 0px -119px !important;">
                            <div class="col-lg-12">
                           
                                <div class="text-center"><h3><b>Log In</b></h3></div>
                                <form id="loginFrom" action="#" method="post" role="form" autocomplete="off">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="pass" id="pass" tabindex="2" class="form-control" placeholder="Password" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-7">
<!--                                                 <input type="checkbox" tabindex="3" name="remember" id="remember">
                                                <label for="remember"> Remember Me</label> -->
                                            </div>
                                            <div class="col-xs-5 pull-right">
                                                <input type="submit" name="login" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6">
                                </form>
                            </div>
                        </ul>
                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="nav">
                    <ul class="slimmenu" id="slimmenu">
                        <li><a href="index.php">Home</a>
                            
                        </li>
                                <li><a href="contact-us.php">Contact Us</a>
                                </li>
                                <li><a href="about.php">About</a>
                                </li>
                               <li><a href="flight-payment.php">flight Registration</a>
                                </li>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </header>