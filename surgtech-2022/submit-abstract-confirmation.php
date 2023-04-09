<?php 
include('inc/config.php');
include('call.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> <?php echo $main_title[0]; ?> <?php echo $main_title[1]; ?> | Submit Abstract </title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/mess-des.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
 </head><!--/head-->

<body>
 <?php include('header-inner.php');?>


            <!--home Section -->
<section class="bgimage">
         <div class="container-fluid">
              <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <h1>Abstract Submission</h1>
                 </div>
               </div>
         </div>
   </section>
             
            <!-- Get a Quote section -->
            <section id="getquote" class="getquote" style="padding: 15px 0;">
                <div class="container">
                    <div class="row">
                        <div class="main_get_quote_area" style="padding: 75px 0;">
                             <div class="main_get_quote_content">
							 
							 <div class="col-md-12">
							 
							 <div class="background"></div>
							 <div class="blockquote-box blockquote-primary clearfix pd_sp">
<div class="container">
	<div class="row">
		<div class="modalbox success col-sm-8 col-md-6 col-lg-5 center animate">
			<div class="icon">
				<span class="fa fa-check"></span>
			</div>
			<!--/.icon-->
			
			<h1>Success!</h1>
			<p>Thank you for submitting your abstract. We will get back to you soon...
				 </p>
			<!--<button type="button" class="redo btn" onclick="goBack()"><a href="index.php" class="text-white">Go to Home</a></button>-->
			 
		</div>
		<!--/.success-->
	</div>
	<!--/.row-->
	 
	<!--/.row-->
</div>
</div>
<!--/.container-->
							 
             
							 
                                 
								<br>
								 
                            </div>

                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container  -->
            </section><!-- End off call Us section -->


           
  <?php include('footer.php');?>

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
