<?php   $query = $con->query("SELECT * FROM  `admin` WHERE `id`='".$_SESSION['admin_id']."'") or  die(mysqli_error($con));
    
    
     $user=$query->fetch_assoc(); ?>
<div class="col-md-3">
                    <aside class="user-profile-sidebar">
                        <div class="user-profile-avatar text-center">
                            <img src="../img/300x300.png" alt="Image Alternative text" title="AMaze" />
                            <h5><?php echo $_SESSION['admin_email']; ?></h5>
                            <p>Member Since <?php /*  $date=date_create($user['timestamp']);
                      //$dd=date_format($date,'jS M Y,g:i A');
                       $dd=date_format($date,'M Y'); ?><?php echo $dd; */ ?></p>
                        </div>
                        <ul class="list user-profile-nav">
                            <li><a href="user-profile.php"><i class="fa fa-user"></i>Overview</a>
                            </li>
                            <li><a href="user-profile-settings.php"><i class="fa fa-cog"></i>Settings</a>
                            </li>
                            <li><a href="booking-history.php"><i class="fa fa-camera"></i>Booking</a>
                            </li>
                            <li><a href="#"><i class="fa fa-clock-o"></i>Booking History</a>
                            </li>
                            <li><a href="#"><i class="fa fa-credit-card"></i>Credit/Debit Cards</a>
                            </li>
                            <li><a href="#"><i class="fa fa-heart-o"></i>Wishlist</a>
                            </li>
                        </ul>
                    </aside>
                </div>