
<?php session_start();
if((isset($_SESSION['admin_id'])) && (isset($_SESSION['admin_email']))){
}else{
  header("location:index.php");
  }

include("../db/config.php");
include("../db/sql.inc.php");
$orderid= $_GET['token'];

if(isset($_POST['updateamt'])){
   $amt = $_POST['amount'];
   $oid = $_POST['oid'];
$form_data = array(
    'amount' =>$_POST['amount'],
);
   $update= dbRowUpdate('order_table', $form_data, "WHERE id = '".$oid."'",$con);
if($update){
  
     $sql   = $con->query("SELECT * FROM  `order_table` where id='".$oid."'") or  die(mysqli_error($con));
     $count = mysqli_num_rows($query);
     $data  = $sql->fetch_assoc();
   /* --------------email password start here----------------- */
          $to  = $data['email']; 
          $subject  = "User password";  
          $headers  = "MIME-Version: 1.0" . "\r\n";
          $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
          $headers .= 'From: <admin@travel.com>' . "\r\n";
          $message  = "<html><head></head><body>";
          $message .=  "<h5>Hii ".$data['email'].",</h5></br>". "\r\n";
          $message .=" <h3>Your Trip charge is :-".$_POST['amount']."</h3></br>" . "\r\n";
          $message .=" <p>Go to Your Profile using your login credential and Pay...</p></br>" . "\r\n";
          $message .=  "<p> Thankyou </p></br>". "\r\n";
          $message .=  "<p> Traveler </p></br></body></html>". "\r\n";
           
     mail($to, $subject, $message, $headers); 
   /* --------------email password end here------------------- */
  header("location:booking-history-view.php?token=".$orderid);
          }
}


 $sql = $con->query("SELECT * FROM  `order_table` WHERE id= '".$orderid."'") or  die(mysqli_error($con));
 $sqldata=$sql->fetch_assoc();

 $c = $con->query("SELECT * FROM  `tbl_passengers` where order_id='".$orderid."'") or  die(mysqli_error($con));
 $rowcount=mysqli_num_rows($c);
?>
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
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/mystyles.css">
    <script src="../js/modernizr.js"></script>


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
<script type="text/javascript">
  
  $(function(){
  $('#amount').keyup(function()
  {
   // alert($(this).val());
    var yourInput = $(this).val();
    var regex = /^[a-zA-Z ]*$/gi;
    var isSplChar = regex.test(yourInput);
    if(isSplChar)
    {
      var no_spl_char = yourInput.replace(/^[a-zA-Z ]*$/gi, '');
      $(this).val(no_spl_char);
    } 
  });
 
});
</script>
        <div class="container">
            <h1 class="page-title">Booking History</h1>
        </div>




        <div class="container">
            <div class="row">
               
            <?php include('profile_sidebar.php');?>

                <div class="col-md-9">
                <!-- details-->
                <div class="row"><div class="col-md-3"><a href="" class="btn btn-primary"><?php if($sqldata['trip_type']=='round'){ echo 'Round trip';}else{ echo 'One Way';}?></a></div></div>
                <hr>
                 <table class="table table-bordered table-striped table-booking-history">
                        <thead>
                            <tr>
                                <th><center>From</center></th>
                                <th><center>To</center></th>
                                 <th><center>Departing Date</center></th>
                                  <?php if($sqldata['trip_type']=='round'){ ?> <th><center>Returning  Date</center></th><?php } ?>
                                <th><center>Passangers</center></th>
                                 <th><center>Amount</center></th>
                                <th><center>Charge</center></th>
                                </tr>
                        </thead>
                        <tbody>
                            <td><center><?php echo $sqldata['form'];?></center></td>
                            <td><center><?php echo $sqldata['To_place'];?></td>
                            <td><center><?php echo $sqldata['departing'];?></center></td>
                            <?php if($sqldata['trip_type']=='round'){ ?> <td><center><?php echo $sqldata['returning'];?></center></td><?php } ?>
                            <td><center><?php echo $rowcount;?></center></td>
                            <td><center><?php if($sqldata['amount'] != ''){ echo "Rs.- ".$sqldata['amount']."/-";}?></center></td>
                            <td><center><a class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#myModal<?php echo $orderid;?>">Cost</a></center></td>
                        </tbody>
                        </table>
                 
                <!-- details-->
               <hr>
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />Show only current trip</label>
                    </div>
                    <table class="table table-bordered table-striped table-booking-history">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Name</th>
                                 <th>DOB</th>
                                  <th>Gender</th>
                                <th>Type</th>
                             

                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
<?php  $query = $con->query("SELECT * FROM  `tbl_passengers` where order_id='".$orderid."'") or  die(mysqli_error($con));
        while($row=$query->fetch_assoc()){
       ?>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-plane"></i><small>flight</small>
                                </td>
                                 <td><?php echo $row['name']." ".$row['surname'];?></td>
                                  <td><?php echo $row['date_of_birth'];?></td>
                                    <td><?php echo $row['gender'];?></td>
                               
                             
                                <td><?php echo $row['type'];?></td>
                                
                                
                            </tr>

                           
                            <?php } ?>
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal<?php echo $orderid;?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <form method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Amount</h4>
        </div>
        <div class="modal-body">
        
         <!-- form group -->
         <div class="form-group form-group-icon-left">
                            <label>Amount (<span style="font-size: 10px;color: red;">Enter only numeric value</span>)</label>
                            <input class="form-control" value="<?php echo $sqldata['amount'];?>" name="amount" id="amount" type="text" required />
                            <input class="form-control" value="<?php echo $sqldata['id'];?>" name="oid" type="hidden" />
                </div>
                 
                               
        </div>
        <!-- form group -->
        <div class="modal-footer">
        <input class="btn btn-primary" value="Save change" name="updateamt" type="submit" />
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
       </form>
    </div>
  </div>
  <!-- model end-->


        <div class="gap"></div>
        <?php include('include/footer.php');?>
        </div>
</body>

</html>


