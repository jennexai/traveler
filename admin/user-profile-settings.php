<?php session_start();

if((isset($_SESSION['admin_id'])) && (isset($_SESSION['admin_email']))){
}else{
  header("location:index.php");
  }
include("../db/config.php");
include("../db/sql.inc.php");

 $user=$_SESSION['admin_id'];
//change password
if(isset($_POST['changepass']))
{
$form_data = array(
    'pass' =>$_POST['npass']
);
if($_POST['npass']==$_POST['cpass']){

          $update= dbRowUpdate('admin', $form_data, "WHERE id = '".$user."'",$con);

          if($update){
          header("location:user-profile-settings.php");
          }

     }
}


if(isset($_POST['updateprofile']))
{
//print_r($_POST);
$form_data = array(
    'name' =>$_POST['fname'],
    'email' => $_POST['email'],  
);

$update= dbRowUpdate('admin', $form_data, "WHERE id = '".$user."'",$con);
if($update){
   $_SESSION['admin_email'] = $_POST['email'];
  header("location:user-profile-settings.php");
          }

}
?>

<?php include('include/header.php');?>
<style type="text/css">
.error{
color:red;
    }
    .input-icon-right{
      cursor: pointer;
        position: absolute;
    width: 32px;
    height: 32px;
    line-height: 32px;
    display: block;
    top: 29px;
    right: 1px;
    text-align: center;
    color: #b3b3b3;
    -webkit-transition: 0.3s;
    -moz-transition: 0.3s;
    -o-transition: 0.3s;
    -ms-transition: 0.3s;
    transition: 0.3s;
    z-index: 2;
    }

    </style>
        <div class="container">
            <h1 class="page-title">Account Settings</h1>
        </div>




        <div class="container">
            <div class="row">
                <?php include('profile_sidebar.php');?>
                <?php  $query = $con->query("SELECT * FROM  `admin` WHERE `id`='".$_SESSION['admin_id']."'") or  die(mysqli_error($con));
                   $rowcount=mysqli_num_rows($query);
                   $data=$query->fetch_assoc(); ?>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-5">
                            <form action="" method="POST" id="profile" name="profile ">
                                <h4>Personal Infomation</h4>
                                <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon"></i>
                                    <label>First Name</label>
                                    <input class="form-control" value="<?php echo $data['name'];?>" name="fname" type="text" />
                                </div>
                                
                                <div class="form-group form-group-icon-left"><i class="fa fa-envelope input-icon"></i>
                                    <label>E-mail</label>
                                    <input class="form-control" value="<?php echo $data['email'];?>" name="email" type="text" />
                                </div>
                               
                                <!-- <div class="gap gap-small"></div>
                                <h4>Location</h4>
                                <div class="form-group form-group-icon-left"><i class="fa fa-plane input-icon"></i>
                                    <label>Home Airport</label>
                                    <input class="form-control" value="London Heathrow Airport (LHR)" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>Street Address</label>
                                    <input class="form-control" value="46 Gray's Inn Rd, London, WC1X 8LP" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    <input class="form-control" value="London" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>State/Province/Region</label>
                                    <input class="form-control" value="London" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>ZIP code/Postal code</label>
                                    <input class="form-control" value="4115523" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>Country</label>
                                    <input class="form-control" value="United Kingdom" type="text" />
                                </div> -->
                                <hr>
                                <input type="submit" class="btn btn-primary" name="updateprofile" value="Save Changes">
                            </form>
                        </div>
                        <div class="col-md-4 col-md-offset-1">
                            <h4>Change Password</h4>
                            <form method="post" onsubmit="return checkPassto();" id="changepasswordadmin" name="changepasswordadmin">
                                <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon"></i>
                                    <label>Current Password</label>
                                    <input class="form-control" type="text" name="opass"  id="opass" />
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon"></i>
                                    <label>New Password</label>
                                    <input class="form-control" type="password" name="npass" id="npass" />
                                     <i class="fa fa-eye input-icon-right" onmouseover="mouseoverPass('npass');" onmouseout="mouseoutPass('npass');" ></i>
                                </div>
                                <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon"></i>
                                    <label>New Password Again</label>
                                    <input class="form-control" type="password" name="cpass" id="cpass" onkeyup="checkPass();" />
                                    <i class="fa fa-eye input-icon-right" onmouseover="mouseoverPass('cpass');" onmouseout="mouseoutPass('cpass');" ></i>
                                </div>
                                <span id="ermsg" style="display:none;color:red;">Confirm Password Same as New Password</span>
                                <hr />
                                <input class="btn btn-primary" type="submit" name="changepass" value="Change Password" />
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <div class="gap"></div>
        <?php include("include/footer.php");?>
    <script type="text/javascript">
        function mouseoverPass(obj) {
        if(obj=='cpass'){
           var obj = document.getElementById('cpass');
           obj.type = "text";
         }else if(obj=='npass'){
          var obj = document.getElementById('npass');
          obj.type = "text";
         }
        }

        function mouseoutPass(obj) {
            if(obj=='cpass'){
           var obj = document.getElementById('cpass');
           obj.type = "password";
         }else if(obj=='npass'){
          var obj = document.getElementById('npass');
          obj.type = "password";
         }
       
        }

  function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('npass');
    var pass2 = document.getElementById('cpass');
    
  
    if((pass1.value != '') && pass1.value == pass2.value){
         $('#msg').hide();
         $("#cpass").css({"border-color": "green"});
          $("#npass").css({"border-color": "green"});
         
    }else{
        
        $('#msg').hide();
         $("#cpass").css({"border-color": "red"});
         $("#npass").css({"border-color": "red"});
       
    }
}  


  function checkPassto()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('npass');
    var pass2 = document.getElementById('cpass');
     var msg = document.getElementById('ermsg');
  
    if(pass1.value == '' || pass2.value == ''){
      
          $("#npass").css({"border-color": "red"});
         $("#cpass").css({"border-color": "red"});
         $('#ermsg').show();
         return false;
    }else{
       if((pass1.value != '') && pass1.value==pass2.value){
        
          $("#npass").css({"border-color": "green"});
           $("#cpass").css({"border-color": "green"});
            $('#ermsg').hide();
        return true;
         }else{
            $("#npass").css({"border-color": "red"});
         $("#cpass").css({"border-color": "red"});
         $('#ermsg').show();
         return false;
        }
    }
}  



</script>
    </div>
</body>

</html>


