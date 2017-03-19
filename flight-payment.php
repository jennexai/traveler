<?php

session_start();
      include("db/config.php");
      include("db/sql.inc.php");
$lastid='';
 if (isset($_POST['search'])) {
    date_default_timezone_set("Asia/Kolkata");
    $date = date("d/m/Y");
    $useremail= '';
    $flag=0;
    $query = $con->query("SELECT * FROM  `tbl_user` WHERE `email`='".$_POST['email']."'") or  die(mysqli_error($con));
     
     $rowcount=mysqli_num_rows($query);
     
     if($rowcount>0){
     $data=$query->fetch_assoc();
     $_SESSION['email'] = $data['email'];
     $_SESSION['id']   = $data['u_id'];
     $useremail = $data['email'];
     $userid=$data['u_id'];
     $flag=1;
     }else{

      $chars = "@abc123ABCdef456DEFghi789GHI#jkl456mno123MNOpqPQRrstuSTUvwxyz_789_JKL#VWxyz137XYZ@";
     $password = substr( str_shuffle( $chars ), 0, 8 );
     $form_data1 = array(
    'email'=>$_POST['email'],
    'mobile'=>$_POST['mobile'],
    'pass'=>$password,
     );
    $sql1 = dbRowInsert('tbl_user', $form_data1,$con);
    $userid=mysqli_insert_id($con); 
    
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['id']   = $userid;
    $useremail =$_POST['email'];

    /* --------------email password start here----------------- */
   $to = $_POST['email']; 
          $subject = "User password";  
          $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          $headers .= 'From: <admin@travel.com>' . "\r\n";
          $message = "<html><head></head><body>";
          $message .=  "<h5>Hii ".$useremail.",</h5></br>". "\r\n";
          $message .=" <h3>Your User Name :-".$useremail."</h3></br>" . "\r\n";
          $message .=" <b>Password :-</b>".$password."</br>" . "\r\n";
          $message .=" <p>You login using above credential</p></br>" . "\r\n";
           $message .=  "<p> Thankyou </p></br>". "\r\n";
          $message .=  "<p> Traveler </p></br></body></html>". "\r\n";
           
     // mail($to, $subject, $message, $headers); 
   /* --------------email password end here------------------- */
}

 
$options = isset($_POST['options']) ? $_POST['options'] : '0';
$optionc = isset($_POST['optionc']) ? $_POST['optionc'] : '0';
$optioni = isset($_POST['optioni']) ? $_POST['optioni'] : '0';

if(isset($_POST['options']) && $_POST['options']=='+5'){
 $options=   $_POST['adult'];
}
if(isset($_POST['optionc']) && $_POST['optionc']=='+5'){
 $optionc=   $_POST['children'];
}
if(isset($_POST['optioni']) && $_POST['optioni']=='+5'){
 $optioni=   $_POST['infant'];
}

    $form_data = array(
    'trip_type'=>$_POST['trip'],
    'To_place'=>$_POST['to'],
    'form'=>$_POST['fprm'],
    'departing'=>$_POST['start'],
    'returning'=>isset($_POST['end']) ? $_POST['end'] : 'NULL',
    'adult' =>$options,
    'children'=>$optionc,
    'infants'=>$optioni,
    'transaction_id'=>$_POST['transaction_id'],
    'pnr'=>$_POST['pnr'],
    'payment_status'=>$_POST['p_status'],
    'status'=>$_POST['status'],
    'email'=>$_POST['email'],
    'mobile'=>$_POST['mobile'],
    'u_id'=>$userid,
    'date'=>$date,
    
);
$sql = dbRowInsert('order_table', $form_data,$con);
$lastid=mysqli_insert_id($con); 


$total =$options+$optionc+$optioni;
   /* --------------email start here----------------- */
   $to = $_POST['email']; 
          $subject = "New Booking";  
          $headers = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          $headers .= 'From: <admin@travel.com>' . "\r\n";
          $message = "<html><head></head><body>";
          $message =  "<h5>Hii,</h5></br>". "\r\n";
          $message .=" <h3>No of Passengers :-".$total."</h3></br>" . "\r\n";
          $message .=" <b>Adult :-</b>".$options."</br>" . "\r\n";
          $message .=" <b>Children :-</b>".$optionc."</br>" . "\r\n";
          $message .=" <b>infants  :-</b>".$optioni."</br>" . "\r\n";
          
            $message .=  "<p> Thankyou </p></br>". "\r\n";
          $message .=  "<p> Traveler </p></br></body></html>". "\r\n";
           
     // mail($to, $subject, $message, $headers); 
   /* --------------email end here------------------- */
 }


include("include/header.php");
  ?>
<!DOCTYPE HTML>
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
            <div class="row row-wrap">


                <div class="col-md-8">
                    <h3>Passengers</h3>
                       
  <form action="submit.php" method="POST" > 
 
<INPUT TYPE="hidden" NAME="product" value="NSE">
<INPUT TYPE="hidden" NAME="TType" value="NBFundTransfer">

<INPUT TYPE="hidden" NAME="clientcode" value="007">
<INPUT TYPE="hidden" NAME="AccountNo" value="1234567890">

<INPUT TYPE="hidden" NAME="ru" value="http://localhost/traveler/booking_success.php">
<input type="hidden" name="bookingid" value="100001"/>
<input type="hidden" name="orderid" value="<?php echo $lastid;?>">
<input type="hidden" name="loops" value="<?php echo $options;?>">
<input type="hidden" name="loop1" value="<?php echo $optionc;?>">
<input type="hidden" name="loop2" value="<?php echo $optioni;?>">
<!-- <input type="hidden" name="tempTxnId" value="12345"> -->
  <ul class="list booking-item-passengers">


  <?php

  if(isset($_POST['options'])){
        $adultid =$_POST['options'];
        if($adultid == '5+'){
                  $adultid =$_POST['adult'];
        }
         // echo $memberid;      
          $usercount = ($adultid);
        echo "Adult";
        for($i=1;$i<=$usercount;$i++)
            // echo $i;
        {
                ?><li>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Sex</label>
                                    <div class="radio-inline radio-small">
                                        <label>
                                            <input class="i-radio" type="radio" name="sex<?php echo $i?>" value="male" />Male</label>
                                    </div>
                                    <div class="radio-inline radio-small">
                                        <label>
                                            <input class="i-radio" type="radio" name="sex<?php echo $i?>" value="female" />Female</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input name="name<?php echo $i?>" class="form-control" type="text" /><span style="color:Red;visibility:hidden;">Client Name is mandatory.
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Surname</label>
                                        <input name="Surname<?php echo $i?>" class="form-control" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input name="date_of_birth<?php echo $i?>" class="date-pick-years form-control" type="text" />
                                    </div>
                                </div>
                            </div>
                            
                            
                        </li>
                        <?php
                
} }
?>
<?php if(isset($_POST['optionc'])){
        $childrenid =$_POST['optionc'];
        if($childrenid == '5+'){
                  $childrenid =$_POST['children'];
        }
         // echo $memberid;      
         $usercount1 = ($childrenid);
       echo "Children";
        for($j=1;$j<=$usercount1;$j++)
            // echo $i;
        {
                ?><li>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Sex</label>
                                    <div class="radio-inline radio-small">
                                        <label>
                                            <input class="i-radio" type="radio" name="sex_c<?php echo $j?>" value="male" />Male</label>
                                    </div>
                                    <div class="radio-inline radio-small">
                                        <label>
                                            <input class="i-radio" type="radio" name="sex_c<?php echo $j?>" value="female" />Female</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input name="name_c<?php echo $j?>" class="form-control" type="text" /><span style="color:Red;visibility:hidden;">Client Name is mandatory.
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Surname</label>
                                        <input name="Surname_c<?php echo $j?>" class="form-control" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input name="date_of_birth_c<?php echo $j?>" class="date-pick-years form-control" type="text" />
                                    </div>
                                </div>
                            </div>
                            
                        </li>
                        <?php
                
} }
?>
<?php  if(isset($_POST['optioni'])){
        $infantsid =$_POST['optioni'];
        if($infantsid == '5+'){
         $infantsid =$_POST['infant'];
        }
         // echo $memberid;      
          $usercount2 = ($infantsid);
          echo "Infants";
        for($k=1;$k<=$usercount2;$k++)
            // echo $i;
        {
                ?><li>
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Sex</label>
                                    <div class="radio-inline radio-small">
                                        <label>
                                            <input class="i-radio" type="radio" name="sex_i<?php echo $k?>" value="male" />Male</label>
                                    </div>
                                    <div class="radio-inline radio-small">
                                        <label>
                                            <input class="i-radio" type="radio" name="sex_i<?php echo $k?>" value="female" />Female</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input name="name_i<?php echo $k?>" class="form-control" type="text" /><span style="color:Red;visibility:hidden;">Client Name is mandatory.
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Surname</label>
                                        <input name="Surname_i<?php echo $k?>" class="form-control" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input name="date_of_birth_i<?php echo $k?>" class="date-pick-years form-control" type="text" />
                                    </div>
                                </div>
                            </div>
                            
                        </li>

                        <?php
         }       
} 
?>

                        <!-- <li> 
                            <div class="row">
                                <div class="col-md-3">
                                    <label>Sex</label>
                                    <div class="radio-inline radio-small">
                                        <label>
                                            <input class="i-radio" type="radio" name="passenger-2-sex" />Male</label>
                                    </div>
                                    <div class="radio-inline radio-small">
                                        <label>
                                            <input class="i-radio" type="radio" name="passenger-2-sex" />Female</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input name="" class="form-control" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Surname</label>
                                        <input class="form-control" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input class="date-pick-years form-control" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-md-offset-3">
                                    <div class="form-group">
                                        <label>Citizenship</label>
                                        <input class="form-control" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Document Series</label>
                                        <input class="form-control" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Expiry Date</label>
                                        <input class="date-pick-years form-control" type="text" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-md-offset-3">
                                    <div class="form-group">
                                        <label>Email Id</label>
                                        <input name="" class="form-control" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mobile No</label>
                                        <input name="" class="form-control" type="text" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Billing Adress</label>
                                        <input name="" class=" form-control" type="text" />
                                    </div>
                                </div>
                                 <!-- <input type="hidden" name="amount" value="" /> -->
                                
                        
                    </ul>
                    <p>Important: You will be redirected to Atom's website to securely complete your payment.</p>
                                <input class="btn btn-primary" type="submit" name="Submit" value="Proceed Payment" />
                            
                    <div class="gap gap-small"></div>
                    
                        </div>
                    
                <div class="col-md-4">
                    <div class="booking-item-payment">
                        <header class="clearfix">
                            <h5 class="mb0">London - New York</h5>
                        </header>
                        <ul class="booking-item-payment-details">
                            <li>
                                <h5>Flight Details</h5>
                                <div class="booking-item-payment-flight">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="booking-item-flight-details">
                                                <div class="booking-item-departure"><i class="fa fa-plane"></i>
                                                    <h5>10:25 PM</h5>
                                                    <p class="booking-item-date">Sun, Mar 22</p>
                                                    <p class="booking-item-destination">London, England, United Kingdom (LHR)</p>
                                                </div>
                                                <div class="booking-item-arrival"><i class="fa fa-plane fa-flip-vertical"></i>
                                                    <h5>12:25 PM</h5>
                                                    <p class="booking-item-date">Sat, Mar 23</p>
                                                    <p class="booking-item-destination">Charlotte, CA, United States (CLT)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="booking-item-flight-duration">
                                                <p>Duration</p>
                                                <h5>10h</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <p>STOP 2 h 55 min Charlotte, United States</p>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="booking-item-flight-details">
                                                <div class="booking-item-departure"><i class="fa fa-plane"></i>
                                                    <h5>10:25 PM</h5>
                                                    <p class="booking-item-date">Sun, Mar 22</p>
                                                    <p class="booking-item-destination">London, England, United Kingdom (LHR)</p>
                                                </div>
                                                <div class="booking-item-arrival"><i class="fa fa-plane fa-flip-vertical"></i>
                                                    <h5>12:25 PM</h5>
                                                    <p class="booking-item-date">Sat, Mar 23</p>
                                                    <p class="booking-item-destination">Charlotte, CA, United States (CLT)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="booking-item-flight-duration">
                                                <p>Duration</p>
                                                <h5>10h</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <h5>Flight (2 Passengers)</h5>
                                <ul class="booking-item-payment-price">
                                    <li>
                                        <p class="booking-item-payment-price-title">2 Passengers</p>
                                        <p class="booking-item-payment-price-amount">$178<small>/per passnger</small>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="booking-item-payment-price-title">Taxes</p>
                                        <p class="booking-item-payment-price-amount">$18<small>/per passnger</small>
                                        </p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                      <p class="booking-item-payment-total"> <input type="hidden" name="amount" value="1000" />Total trip: <span>$392</span>
                        </p>
                    </div>
                </div>
                </form>
            </div>
            <div class="gap"></div>

        </div>



        <?php include("include/footer.php");?>
</body>

</html>


