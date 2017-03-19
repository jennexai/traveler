<?php session_start();
include("../db/config.php");
include("../db/sql.inc.php");
 
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
		<br>
		
            <h3 class="">PNR Section</h3>
			<br>
		
        </div>




        <div class="container">
            <div class="row">
               
            <?php include('profile_sidebar.php');?>

                <div class="col-md-9">
                    <div class="checkbox">
                        
                    </div>
                    <table class="table table-bordered table-striped table-booking-history">
                        <thead>
                            <tr>
                                <th>Type</th>
								<th>PNR</th>
                                <th>Name</th>
                                  
                                  <th>Phone</th>
                                
                              <!--   <th>Location</th> -->
                                <th>Payment Status</th>
                                <!-- <th>Execution Date</th> -->
                                <th>PNR status</th>
                               <!--  <th>Current</th> -->

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
<?php  $query = $con->query("SELECT * FROM  `temp_reservation`") or  die(mysqli_error($con));
     
     $rowcount=mysqli_num_rows($query);
    
     while($data=$query->fetch_assoc()){
        $query1 = $con->query("SELECT * FROM  `tbl_user` where mobile='".$data['phone']."'") or  die(mysqli_error($con));
        $row=$query1->fetch_assoc();?>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-plane"></i><small>flight</small>
                                </td>
								 <td><?php echo $data['pnr'];?></td>
                                 <td><?php echo $row['fname']." ".$row['lname'];?></td>
                                     <td><?php echo $row['mobile'];?></td>
                                 <td><?php 
								 $ps = $data['payment_status'];
								 if($ps == "pending"){
									$color = "#ed8323";
									$bold = "";
								 }
								 if($ps == "failed"){
									$color = "red";
									$bold = "bold";
								 }
								 if($ps =="done"){
									$color = "green";
									$bold = "";
								 }
								 echo "<span style='color:$color;font-weight:$bold'>".$ps."</span>";
								 ?></td>
								 
								 
								    <td><?php 
								 $pns = $data['pnr_status'];
								 if($pns == "temp"){
									$pncolor = "red";
									$pnbold = "bold";
								 }
								  
								 if($pns =="active"){
									$pncolor = "green";
									$pnbold = "";
								 }
								 echo "<span style='color:$pncolor;font-weight:$pnbold'>".$pns."</span>";
								 ?></td>
								 
								 
								 
                                <td class="text-center">
							  <button class="btn btn-default btn-sm update_pnr" id="<?php echo $data['pnr']."-".$data['pnr_status']."-".$data['id']; ?>">Update</button>
                                </td>
                            </tr>

                            <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update PNR status</h4>
        </div>
        <div class="modal-body">
        
         <!-- form group -->
		     <div class="form-group form-group-icon-left">
                            <label>PNR number</label>
                            <input class="form-control"  name="pnrnumber" id='pnr_number' type="text" required />
                </div>
				
         <div class="form-group form-group-icon-left">
                            <label>PNR status</label>
                            <select id="pnrstatus" class="form-control">
							
								<option id="cur_pnr_st"></option>
								<option value='temp'>Disable</option>
								<option value='active'>Activate</option>
								
							</select>
                </div>
                <input type="hidden" id="hidden_id">
                               
        </div>
        <!-- form group -->
        <div class="modal-footer">
        <input class="btn btn-primary" id="update_pnr_settings"value="Save change" type="button" />
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
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
<script>
	$(document).ready(function(){
		$(".update_pnr").on("click", function(e){
			e.preventDefault();		
			
			   $("#temp_msg").remove();
				data = $(this).attr("id").split("-");
				$("#pnr_number").val(data[0]);
				$("#cur_pnr_st").text(data[1]); 
					$("#cur_pnr_st").val(data[1]);
				$("#hidden_id").val(data[2]);
				$("#myModal").modal("show");
		});
		
		$("#update_pnr_settings").on("click", function(e){
		e.preventDefault();			 
			 pnr_num = $("#pnr_number").val();
			 pnr_stats = $("#pnrstatus option:selected").val();
			 dataString = "pnr_number="+pnr_num+"&pnr_status="+pnr_stats+"&id="+$("#hidden_id").val();
			 //alert(dataString);
			 $.ajax({
				url:"pnr_setting.php",
				type:"post",
				data:dataString,
				success:function(){
					$(".modal-body").append("<div id='temp_msg' class='alert alert-success'><center><strong>success : </strong> PNR status changed successfully!</center></div>");
					$("#temp_msg").fadeOut(3500);
				}
			 })
		});
	})
</script>

