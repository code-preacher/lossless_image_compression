<?php

$sd=mysqli_query($con,"SELECT name FROM user WHERE email='".$_SESSION['email']."'");
$ds=mysqli_fetch_array($sd);
?>

<!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.php"><i class="fa fa-user fa-2x"></i></a></p>
          <h5 class="centered">
          Hello, <?php echo $ds['name']; ?>
        </h5>
          <li class="mt">
            <a href="dashboard.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
               
         <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-image"></i>
              <span>Compression</span>
              </a>
            <ul class="sub">
              <li><a href="compress.php">Compress image</a></li>
              <li><a href="view-compression.php">View Compression info</a></li>
              </ul>
          </li>
         
<li>
            <a href="profile.php">
              <i class="fa fa-user"></i>
              <span>Profile </span>
              </a>
          </li>

          <li>
            <a href="../inc/logout.php" onClick="return confirm('Are you sure you want to Logout?')">
              <i class="fa fa-sign-out"></i>
              <span>Logout </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->