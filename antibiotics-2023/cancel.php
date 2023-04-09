<?php
session_start();
include('functions.php');
$price = $_GET['price'];
$sid=session_id();
?>
<!doctype html>
 <html class="no-js " lang="en">  
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title><?php echo $main_title[0]; ?> <?php echo $main_title[1]; ?> | Registration</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet"> 
	
    <!-- Custom & Default Styles -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="style.css">
  <style>
 .bx{
	 box-shadow: 2px 2px 2px 2px #ccc;
 }
</style>
  
 </head><!--/head-->

<body>
 <?php include('header-inner.php');?>

        <section class="section db p100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Payment Status</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">Payment Status</a></li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

            <br> 
			<?php 
            $sid=session_id();
            include "setting.php";
            mysqli_query($conn1,"update tbl_registration_tblstr_d set `txnsttaus`='failed',`status`='0',`sess_id`='' where sess_id='$sid'");
            session_destroy(); ?>
			<section class="section gb nopadtop">
            <div class="container">
                   <div class="row blog-grid">
                        <div class="col-md-12">
                           <h3 align="center">Your Payment Failed Kindly contact our representative <a href="mailto:contact@agmeets.org">contact@agmeets.org</a></h3>
						</div>
					</div>
            </div><!-- end boxed -->
        </section>
			
          
  
<?php include("footer.php"); ?>
  
    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
     
   </body>
</html>