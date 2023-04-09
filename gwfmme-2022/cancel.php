<?php 

include('call.php');
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> <?php echo $main_title[0]; ?> <?php echo $main_title[1]; ?> | Registration Canceled</title>
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
  
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
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
                   <h1>Registration Canceled</h1>
                 </div>
               </div>
         </div>
       </section>

            <br> 
  <section class="form section" id="register" style="padding:0px !important;">
    <div class="container">
       <div class="row">
      <div class="col-lg-12 col-md-12 mb-4 mb-lg-0" style="padding:50px;">
      <h1 align="center" style="color:#000;">Your PayPal transaction has been canceled.</h1>
      <?php 
            $sid=session_id();
            include "setting.php";
            mysqli_query($con1,"update tbl_registration_tblstr_d set `txnsttaus`='failed',`status`='0',`sess_id`='' where sess_id='$sid'");
            session_destroy(); ?>
            <p align="center" style="color:#000;padding:10px;">Kindly contact our represetative <a href="mailto:contact@auragengroup.com">contact@auragengroup.com</a></p>
        </div>
        </div>
    </div>
  </section>
  <!--================ Key Note Speaker section End =================-->
  <!--================ Innovation section End =================-->


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