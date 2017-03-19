
<?php session_start();
if((isset($_SESSION['admin_id'])) && (isset($_SESSION['admin_email']))){
}else{
  header("location:index.php");
  }
include("../db/config.php");
include("../db/sql.inc.php");

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
  header("location:booking-history.php");
          }
}
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
                                <th>Name</th>
                                 <th>Email</th>
                                  <th>Phone</th>
                                <th>Title</th>
                              <!--   <th>Location</th> -->
                                <th>Order Date</th>
                                <!-- <th>Execution Date</th> -->
                                <th>Cost</th>
                               <!--  <th>Current</th> -->

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
<?php  $query = $con->query("SELECT * FROM  `order_table`") or  die(mysqli_error($con));
     
     $rowcount=mysqli_num_rows($query);
    
     while($data=$query->fetch_assoc()){
        $query1 = $con->query("SELECT * FROM  `tbl_user` where u_id='".$data['u_id']."'") or  die(mysqli_error($con));
        $row=$query1->fetch_assoc();?>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-plane"></i><small>flight</small>
                                </td>
                                 <td><?php echo $row['fname']." ".$row['lname'];?></td>
                                  <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['mobile'];?></td>
                                <td class="booking-history-title"><?php echo $data['form']." <strong> To </strong> ".$data['To_place'];?></td>
                               <!--  <td><?php //echo $data['form'];?></td> -->
                                <td><?php echo $data['date'];?></td>
                                <!-- <td>4/25/2014</td> -->
                                <td><?php if($data['amount'] != ''){ echo "Rs.- ".$data['amount']."/-";}?></td>
                                <!-- <td class="text-center"><i class="fa fa-check"></i>
                                </td> -->
                                <td class="text-center">
                              <!-- <a class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#myModal<?php //echo $data['id'];?>">Cost</a>  |--> <a class="btn btn-default btn-sm" href="booking-history-view.php?token=<?php echo $data['id']; ?>">View</a>
                                </td>
                            </tr>

                            <!-- Modal -->
  <div class="modal fade" id="myModal<?php echo $data['id'];?>" role="dialog">
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
                            <label>Amount</label>
                            <input class="form-control" value="<?php echo $data['amount'];?>" name="amount" type="text" required />
                            <input class="form-control" value="<?php echo $data['id'];?>" name="oid" type="hidden" />
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
                            <?php } ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        <div class="gap"></div>
        <?php include('include/footer.php');?>
        </div>
</body>

</html>


