<?php 
ob_start();
session_start();
include '../inc/checklogin.php';
checkLogin();
include('../inc/config.php');
$_SESSION['pmsg']=""; 
?>
<?php
if(isset($_POST['submit'])){
$fd=mysqli_query($con,"SELECT * FROM user WHERE email='".$_SESSION['email']."'");
$pv=mysqli_fetch_array($fd);
$pn=$pv['name'];

ini_set("error_reporting", 1);
  function compress($source, $destination, $quality) {

    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') 
      $image = imagecreatefromjpeg($source);

    elseif ($info['mime'] == 'image/gif') 
      $image = imagecreatefromgif($source);

    elseif ($info['mime'] == 'image/png') 
      $image = imagecreatefrompng($source);

    imagejpeg($image, $destination, $quality);

    return $destination;
  }

if ($_FILES["file"]["error"] > 0) 
    {
            $error = $_FILES["file"]["error"];
        }
        else if (($_FILES["file"]["type"] == "image/gif") ||
            ($_FILES["file"]["type"] == "image/jpeg") ||
            ($_FILES["file"]["type"] == "image/png") ||
            ($_FILES["file"]["type"] == "image/jpeg")) 
    {
            $destination_url = 'converted/'.uniqid().'_'.$pn.'.jpg';
      $source_img = $_FILES["file"]["tmp_name"];
      
      $fianl_file = compress($source_img, $destination_url, 50);
      $error = "Image Compressed successfully";
      
        }else {
            $error = "Uploaded image should be jpg or gif or png";
        }


          $date=date("d-m-y @ g:i A");
          $pix=$_FILES['file']['name'];
          $temp=$_FILES['file']['tmp_name'];
          $folder="images/" ;  
          $pd=uniqid().'_'.$pn.'_'.$pix; 
          
          move_uploaded_file($temp,$folder.$pd)  ;

       



$da=mysqli_query($con,"insert into compress(name,oimg,nimg,date) values('$pn','$pd','$destination_url','$date')");
if ($da) {
$_SESSION['pmsg']='<span style="color:#5cb85c;">'."Image Compression was successfully....".'</span>';

} else {
  $_SESSION['pmsg']='<span style="color:#d9534f;">'."Error Compressing....".'</span>';

}

}


?>

<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        
        <div class="row mt">
          <div class="col-lg-12 mt">
            <div class="row content-panel">
                    <div class="row">
                      
                      <div class="col-lg-8 col-lg-offset-2 detailed mt">
                        <h4 class="mb">Compress Image : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        <?php
        if (!empty($_SESSION['pmsg'])) {
           echo $_SESSION['pmsg'];
           $_SESSION['pmsg']="";
         } 
          
        ?></h4>
         
                <form class="form-horizontal style-form" action="#" name="img_compress" id="img_compress" method="post" enctype="multipart/form-data">

             <div class="form-group last">
                  <label class="control-label col-md-3">Image Upload</label>
                  <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="../img/avatar.png" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" name="file" id="file" class="default" required="required" />
                        </span>

                       
                      </div>
                    </div>
                    <span class="label label-info">NOTE!</span>
                    <span>
                      Attached image thumbnail is
                      supported in Latest Firefox, Chrome, Opera,
                      Safari and Internet Explorer 10 only
                      </span>
                  </div>
                </div>

<br/>
                <div class="row">
                   <div class="col-md-3"></div>
                  <div class="col-md-8"><button type="submit" name="submit" id="submit" class="btn btn-info col-md-4">Compress</button></div>


</div>
<br/><br/><br/>
              </form>
                      </div>
                      <!-- /col-lg-8 -->
                    </div>







                    <!-- /row -->
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
      
            </div>
            <!-- /col-lg-12 -->
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
  <?php
include 'inc/footer.php';
   ?>