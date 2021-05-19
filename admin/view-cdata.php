<?php 
ob_start();
session_start();
include '../inc/checklogin.php';
checkLogin();
include('../inc/config.php');
 
$_SESSION['ymsg']=""; 
?>
<?php

$fd=mysqli_query($con,"SELECT * FROM compress WHERE id='".$_GET['id']."'");
$fg=mysqli_fetch_array($fd);

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
                        <h4 class="mb">Image Data : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
        <?php

         
        ?></h4>
         
  
                      </div>
                      <!-- /col-lg-8 -->
                    </div>

<div class="col-lg-6"><span >UNCOMPRESSED IMAGE :</span>
    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail col-md-6">
                        <img src="../user/images/<?php echo $fg['oimg']?>" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail col-lg-6"></div>
                      <div>
                       
                        </span>     
                      </div>
                    </div>
                     <span >IMAGE SIZE : <?php echo filesize('../user/images/'.$fg['oimg']).'Bytes';?></span><br>

  </div>

  <div class="col-md-6"><span >COMPRESSED IMAGE :</span>

    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail col-md-6">
                         <img src="../user/<?php echo $fg['nimg']?>" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail col-lg-6"></div>
                      <div>
                       
                        </span>     
                      </div>
                    

  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <span >IMAGE SIZE : <?php echo filesize('../user/'.$fg['nimg']).'Bytes';?></span><br>
  <span class="label label-info" ><a href="../user/<?php echo $fg['nimg']?>" alt="" style="color: white;">Download compressed image</a></span> </span>
</div>
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