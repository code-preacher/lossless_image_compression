<?php
ob_start();
session_start();
error_reporting(0);
include '../inc/checklogin.php';
checkLogin();
include '../inc/config.php';
?>
<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Dashboard</h3>
        <div class="row mt">
          <div class="col-lg-12">
            
            <div class="row">
         
          <a href="view-car.php" style="color: gray;">
              <div class="col-md-3 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>IMAGES</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-image fa-2x"></i></h1>
                  <p>TOTAL NUMBER OF COMPRESSED IMAGES</p>
                  <footer>
                    <div class="centered">
                      <h5> 
<?php 
$cn=mysqli_query($con,"select * from compress");
$nc=mysqli_num_rows($cn);
echo $nc;

?>

                      </h5>
                    </div>
                  </footer>
                </div>
                <!--  /darkblue panel -->
              </div>
            </a>
              <!-- /col-md-4 -->

<a href="view-user.php" style="color: gray;">
 <div class="col-md-3 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>USERS</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-users fa-2x"></i></h1>
                  <p>TOTAL NUMBER OF USERS</p>
                  <footer>
                    <div class="centered">
                         <h5> 
<?php 
$xn=mysqli_query($con,"select * from user");
$nx=mysqli_num_rows($xn);
echo $nx;

?>

                      </h5>
                    </div>
                  </footer>
                </div>
                <!--  /darkblue panel -->
              </div>
              <!-- /col-md-4 -->
            </a>

<a href="profile.php" style="color: gray;">
               <div class="col-md-3 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>MY PROFILE</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-user fa-2x"></i></h1>
                  <p>PROFILE</p>
                  <footer>
                    <div class="centered">
                      <h5>View Profile</h5>
                    </div>
                  </footer>
                </div>
                <!--  /darkblue panel -->
              </div>
              <!-- /col-md-4 -->
</a>

<a href="../inc/logout.php" onClick="return confirm('Are you sure you want to Logout?')" style="color: gray;">
               <div class="col-md-3 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>LOGOUT</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-sign-out fa-2x"></i></h1>
                  <p>SIGNOUT</p>
                  <footer>
                    <div class="centered">
                      <h5>Logout Now</h5>
                    </div>
                  </footer>
                </div>
                <!--  /darkblue panel -->
              </div>
              <!-- /col-md-4 -->
            </a>



            </div>
            <!-- /row - SECOND ROW OF PANELS -->
      
            </div>
            <!--  END SIXTH ROW OF PANELS -->
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->

   <?php
include 'inc/footer.php';
   ?>
   