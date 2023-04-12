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
   <title><?php echo $row_meta['ab_title_bars'];?></title>

	<meta content="<?php echo $row_meta['ab_keywords'];?>" name='keywords'/>
	  
	<meta content="<?php echo $row_meta['ab_description'];?>" name='description'/>
    
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
                            <h3>Sessions</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">Sessions</a></li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        
		 <section class="section gb">
            <div class="container">
                 <div class="boxed boxedp4" style="background:none;">
                    <div class="row blog-grid">
                        <div class="col-md-12">
                            <div class="course-box">
                    <!--<div class="col-md-4 hidden-sm hidden-xs">
                        <div class="custom-module">
                            <img src="images/presentation.jpg" alt="" class="img-responsive wow slideInLeft">
                        </div> 
                    </div> -->
                    <div class="col-lg-12" >
                        <div class="custom-module p40l">
                            <h2 style="color: #01bacf;">Submit the abstract according to your session interest. Please follow the format of our 

							<mark><a href="https://agmeets.org/uploads/abstract-sample-template.docx" style="color:#fff;">Sample Template</a> </mark> </h2>

                            

                            <hr class="invis">

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 first sess-background-inner">
                                    <ul class="check">
                                         <?php
                           include('inc/config.php');
                           include("functions.php");	
				 $f_half = mysqli_query($conn1,"select * from topics_tblstr_d where user='$id' AND `status`='1' AND  track_id % 2 = 1 order by track_id ASC");
						while($row1=mysqli_fetch_array($f_half)){
						?>	
									<li style="color:#fff;"><?php echo $row1['track_name'];?></li>
                        	<?php } ?>	
  
                                    </ul><!-- end check -->
									  
                                </div><!-- end col-lg-4 -->
                                
                                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 last sess-background-inner">
								<ul class="check">
                                    <?php
                           include('inc/config.php');
                           include("functions.php");	
				 $f_half = mysqli_query($conn1,"select * from topics_tblstr_d where user='$id' AND `status`='1' AND  track_id % 2 = 0 order by track_id ASC");
						while($row1=mysqli_fetch_array($f_half)){
						?>
									<li style="color:#fff;"><?php echo $row1['track_name'];?></li>
                        	<?php } ?>	
                                    </ul><!-- end check -->
									 
                                </div><!-- end col-lg-4 --> 
								<hr>
								 
                            </div><!-- end row -->   

                            <hr class="invis">

                           

                        </div><!-- end module -->
                    </div><!-- end col -->
					
                </div><!-- end row -->
            </div><!-- end container -->
            </div><!-- end container -->
            </div><!-- end container -->
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