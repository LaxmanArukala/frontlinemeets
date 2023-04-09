<?php
include('functions.php');
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
    <title><?php echo $main_title[0]; ?> <?php echo $main_title[1]; ?> | Venue</title>
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
 
</head>
<body>  

    <!-- LOADER -->
   
   <?php include('header-inner.php');?>

        <section class="section db p100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>Venue</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">Venue</a></li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
    
		<section class="section gb nopadtop">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box m30">
                            
                            <h4>Venue</h4>
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="images/venue-1.jpg" alt="" style="width:100%;">
                                    </div>

                                    <div class="item">
                                        <img src="images/venue-1.jpg" alt="" style="width:100%;">
                                    </div>
                                    
                                    <div class="item">
                                        <img src="images/venue-1.jpg" alt="" style="width:100%;">
                                    </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                                </a>
                            </div>
                             <!-- <img src="images/venue-1.jpg" class="img-responsive img-thumbnail" height="376"> -->
                        </div>
                    </div><!-- end col -->

                    <!-- <div class="col-md-6">
                        <div class="box m30">
 
                            <h4>Location</h4>
                             <iframe src="<?php //echo $venue_hospitality_row['map'];?>" width="100%" height="330"   allowfullscreen="" class="pm" ></iframe>
                        </div>
                    </div> -->
                    <!-- end col -->
                </div><!-- end row -->

                <hr class="invis">

                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                             <div class="shop-extra">
                               <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#Venue">Venue Detail</a></li>
                                  <li><a data-toggle="tab" href="#Travel">Travel </a></li> 
                                    <li><a data-toggle="tab" href="#Visa">Visa Info</a></li> 
                                </ul>

                                <div class="tab-content">
                                    <div id="Venue" class="tab-pane fade in active">
                                         <?php echo	$venue_hospitality_row['venue_content'];?>
                                    </div>
                                   <div id="Travel" class="tab-pane fade">
                                      
                                        <?php echo $pages_row['travel_info'];?>
                                    </div> 
                                    <div id="Visa" class="tab-pane fade">
                                      	<?php echo $pages_row['visa_information'];?>
                                         
                                    </div> 
                                </div> 
                            </div><!-- end shop-extra -->
                        </div>
                       </div><!-- end col -->

                     
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
 
        <?php include('footer.php');?>

    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
     
   </body>
</html>