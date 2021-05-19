<?php
session_start();
error_reporting(0);
?>
<?php
include("inc/config.php");
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
   $password=$_POST['password'];
  $date=date("d-m-y @ g:i A");
$da=mysqli_query($con,"insert into user(name,email,password,date) values('$name','$email','$password','$date')");
if ($da) {
$_SESSION['msg']='<span style="color:#5cb85c;">'."Account was successfully created, login....".'</span>';
header("location:login.php");
} else {
  $_SESSION['msg']='<span style="color:#d9534f;">'."Error creating account....".'</span>';
  header("location:login.php");
}

}

?>

<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keyword" content="LOSSLESS IMAGE COMPRESSION">
  <title>LOSSLESS IMAGE COMPRESSION</title>

  <!-- Favicons -->
  <link href="img/logo.png" rel="icon" type="image/png">
  


  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
   <style type="text/css">
    body{
      background: url(img/login-bg2.png);
    }
  </style>
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <br><br><br><br>
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="#" method="post">
        <h2 class="form-login-heading">sign up now</h2>
        <div class="login-wrap">
          <p></p>
        <input type="text" class="form-control" name="name" placeholder="Full name" autofocus required="required">
        <br>
          <input type="email" class="form-control" name="email" placeholder="Email" autofocus required="required">
          <br>
          <input type="text" class="form-control" name="password" placeholder="Password" autofocus required="required">
         <!-- <label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
            <span class="pull-right">
            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
            </span>
            </label>-->
            <br />
          <button class="btn btn-theme btn-block"  type="submit" name="submit"><i class="fa fa-lock"></i> SIGN UP</button>
          <br/>
           <br />
          <a href="login.php" class="btn btn-theme"><i class="fa fa-sign-in"></i> Click to Login</a>&nbsp;&nbsp;&nbsp;

          <a href="index.html" class="btn btn-theme"><i class="fa fa-home"></i> Back to home</a>
          <br/>
          
        </div>
        <!-- Modal 
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
       modal -->
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.png", {
      speed: 500
    });
  </script>
</body>

</html>
