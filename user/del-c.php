<?php 
ob_start();
session_start();
include '../inc/checklogin.php';
checkLogin();
$id=$_GET['id'];
?>

<?php
include '../inc/config.php';
$j=mysqli_query($con,"delete from user where id='$id'");
 if ($j) {
  $_SESSION['omsg']= '<span style="color:#5cb85c;">'."User was successfully deleted".'</span>';
 header("location:view-user.php");
 } else {
  $_SESSION['omsg']= '<span style="color:#d9534f;">'."User was not successfully deleted".'</span>';
 header("location:view-user.php");
 }
 


?>


