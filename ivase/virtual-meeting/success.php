<?php 
include('call.php');
ob_start();
session_start();
 $sid=session_id();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> <?php echo $main_title[0]; ?> <?php echo $main_title[1]; ?> | Registration Status</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <style>
	th {
     text-align: center !important; 
        }
		</style>
  
 </head><!--/head-->

<body>
<?php include('header-inner.php');?>
  
  <!--================Hero Banner Area End =================-->
 
 <section class="bgimage">
         <div class="container-fluid">
              <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <h1>Registration Status</h1>
                 </div>
               </div>
         </div>
       </section>

            <br> 
           <?php
include "setting.php";  
//Get payment information from PayPal
$sid=session_id();
 $final=mysqli_query($con1,"update tbl_registration_tblstr_d set `txnsttaus`='success',`status`='1',`sess_id`='0' where `sess_id`='$sid'");
   if(mysqli_query($con1,"update tbl_registration_tblstr_d set status='1' where sess_id='$sid'"))
   {
      mysqli_query($con1,"update tbl_registration_tblstr_d set sess_id='' and txnsttaus='success' where sess_id='$sid'");
      echo "<div class='alert alert-success' style='text-align:center;font-size:26px;margin-bottom:0px;padding-top:1px;'><h4 style='color:#009933;'>Your Registration for Requested Conference is Done Successfully</h4><br><p style='font-size:22px;'>Payment and Registration Details will be sent to you soon.</p></div>"; 
   }
session_destroy();
?>
<section id="status" class="getquote">
                <div class="container">
                    <div class="row">
                                 <div class="col-sm-12">
         <p align="center">You have completed registration successfully, our Conference co-ordinator will get in touch with you.</p>
        </div> 
            </div> 
        </div> 
  </section>
       <p></p>
<?php include("footer.php"); ?>
 
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script>
  $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
  </script>

    </body>
 
</html>