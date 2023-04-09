<?php include('functions.php');?>
<!doctype html>
 <html class="no-js " lang="en">  
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
     <title><?php echo $row_meta['terms_title_bars'];?></title>

	<meta content="<?php echo $row_meta['terms_keywords'];?>" name='keywords'/>
	  
	<meta content="<?php echo $row_meta['terms_description'];?>" name='description'/>
    
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
 
</head>
<body>  
 
   <?php include('header-inner.php');?>

        <section class="section db p100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Privacy Policy</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)"></a></li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
			 <!-- start banner Area -->
			 
			
<section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">
                    <div class="row blog-grid">
                        <div class="col-md-12">
                            <div class="course-box">
 
			   	<?php echo $pages_row['policies'];?> 
		    
					</div>
				</div>
			</div>
        </div>
        </div>
</section> 
 
<br>     
          <?php include('footer.php');?>

    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
 
   </body>
</html>