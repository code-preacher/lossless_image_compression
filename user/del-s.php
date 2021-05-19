<?php 
ob_start();
session_start();
include '../inc/checklogin.php';
checkLogin();
$id=$_GET['id'];
?>

<?php
include '../inc/config.php';
$j=mysqli_query($con,"delete from compress where id='$id'");
 if ($j) {
  $_SESSION['omsg']= '<span style="color:#5cb85c;">'."compression was successfully deleted".'</span>';
 header("location:view-compression.php");
 } else {
  $_SESSION['omsg']= '<span style="color:#d9534f;">'."Compression was not successfully deleted".'</span>';
 header("location:view-user.php");
 }
  header("location:view-compression.php");


?>


