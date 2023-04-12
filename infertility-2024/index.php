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
     <title><?php echo $row_meta['title_bars'];?></title>

   <meta content="<?php echo $row_meta['keywords'];?>" name='keywords'/>
  
  <meta content="<?php echo $row_meta['description'];?>" name='description'/>
    
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
    <link rel="stylesheet" href="css/sper.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="style.css">
 
</head>
<body>  

    
    <div id="wrapper">
        
 <?php include('header.php');?>
       

        <section class="parallax event-section" data-stellar-background-ratio="0.5" style="background:url('images/slide/Slide-1.jpg');background-size:cover;box-shadow:inset 0 0 0 2000px rgb(14 14 14 / 62%);">
  
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message event-title text-center">
                            <h3><span class="short-h"><?php echo $main_title[0]; ?> </span><br>
							<?php echo $main_title[1]; ?></h3>
                            <!--<p class="text-white"><b><i class="fa fa-calendar" aria-hidden="true"></i> 16-18 July, 2021</b></p>-->
                            <p class="text-white"><b>Theme:  </b><?php echo $r1['Theme'];?></p>
							
							
                           
							  <!-- <a href="submit-abstract" class="btn btn-primary">Submit Abstract<br></a>
                            <a href="register" class="btn btn-warning">Register Now<br></a> -->
							
                        </div>
						<br>
						<!--<div align="center" id="timer">
			                </div>-->
						<!-- <p></p> -->
						<!-- <div align="left" class="col-md-6">
							 <a href="#"class="cl-w"><p class="text-white"><b>ABSTRACT SUBMISSION DEADLINE</b></p> <p class="text-white"><b><?php echo $r1['abstract_submission_opens']; ?></b></p></a>
					    </div>
						<div  align="right" class="col-md-6">
                            <a href="#" class="cl-w"><p class="text-white"><b>EARLY BIRD REGISTRATION DEADLINE </b></p> <p class="text-white"><b> <?php echo $r1['EarlyBird']; ?></b></p></a>
					    </div>
							<hr> -->
							<div class="col-md-12">
							
							<div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="imp-bg">
                                        <h4 class="text-center imp-icons-tx"><i class="fa fa-calendar"></i> Dates </h4>
                                        <hr>
                                        <h4 class="text-center imp-icons-tx"><?php echo $r1['ConferenceDates']; ?></h4>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="imp-bg">
                                        <h4 class="text-center imp-icons-tx"><i class="fa fa-map-marker"></i>  Location </h4>
                                        <hr>
                                        <h4 class="text-center imp-icons-tx"><?php echo $r1['ConferenceVenue']; ?></h4>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="imp-bg">
                                        <h4 class="text-center imp-icons-tx"><i class="fa fa-file-text-o"></i>  Program</h4>
                                        <hr>
                                        <h4 class="text-center blink-prog imp-icons-tx"><a href="program.pdf" target="_blank" style="color:#fff;">Click Here to View Program</a></h4>

                                    </div>                                   
                                </div>
					        </div>
					</div>
                    </div><!-- end col -->
					
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
<div class="popup-btn">
				<a href="download-brochure" class="blink-prog">&nbsp;&nbsp; Download Brochure &nbsp;&nbsp;</a>
			</div>
			<div class="popup-btn1">
				<a href="" class="blink-prog">&nbsp;&nbsp; Abstract Submission &nbsp;&nbsp;</a>
			</div>
			 <?php                  
		include("config/config.php"); 
		include("functions.php");	
		$query  = "SELECT * FROM committee_tblstr_d WHERE user='$id' ORDER BY recordListingID ASC Limit 8";
		$result = mysqli_query($conn1,$query);	
		if(mysqli_num_rows($result)>0)		
			{								
		
		?>	
			
        <section class="section gb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>ORGANIZING COMMITTEE MEMBERS </h3>
                    
                </div> 
           				

               <?php
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))	
                        {	
                        if($row['photo']!="")	
                        {							
                    $img_pth = "https://agmeets.org/uploads/speakers/".$row['photo'];	
                    }							
                    
                                        
                    ?> 
								<div class="col-md-3">
								 <div class="content">
									<a href="#" target="_blank">
									  <div class="content-overlay"></div>
									  <img class="content-image mg-circle" src="<?php echo $img_pth;?>"  >
									  <div class="content-details fadeIn-bottom">
										<h3 class="content-title"><?php echo $row['name'];?></h3>
										<hr>
										<p class="content-text"><?php echo $row['affiliation'];?></p>
									  </div>
									</a>
								  </div>
								  </div>
					
					 
 
                                     <?php } ?>	

                     

                  <hr class="invis">

                 
            </div> 
        </section> 
		<?php } ?>	
		
		 <!-- <section class="section db p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message text-center">
                            <h3> </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- end section -->

        <section class="section gb nopadtop" style="padding: 20px !important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a data-toggle="pill" href="#home">About Meeting</a></li>
                            <li><a data-toggle="pill" href="#menu1">Sessions</a></li>
                            <li><a data-toggle="pill" href="#menu2">Important Information</a></li>
                        </ul>
                        
                        <div class="tab-content">
                            <!-- about meeting Start -->
                            <div id="home" class="tab-pane fade in active">
                                <div style="margin-top: 20px">
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <?php echo $r4['home']; ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- about meeting end -->
                            <!-- Sessions Tab start -->
                            <div id="menu1" class="tab-pane fade">
                                <div style="margin-top: 20px">
                                    <div class="row">
                                        <div class="col-lg-12" >
                                            <div class="custom-module p40l">
                                                <h2 style="color: #000;">Submit the abstract according to your session interest. Please follow the format of our 

                                            <mark><a href="https://agmeets.org/uploads/abstract-sample-template.docx" style="color:#fff;">Sample Template</a> </mark> </h2>

                                                

                                                <hr class="invis">

                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 first sess-background">
                                                        <ul class="check">
                                                            <?php                        
                                                                include('inc/config.php');                 
                                                                include("functions.php");				
                                                                $f_half = mysqli_query($conn1,"select * from topics_tblstr_d where user='$id' AND `status`='1' AND  track_id % 3 = 2 order by track_id ASC");					
                                                                while($row1=mysqli_fetch_array($f_half)){						
                                                                ?>	
                                                            <li><?php echo $row1['track_name'];?></li>
                                                            <?php } ?>
                                                        </ul><!-- end check -->
                                                        
                                                    </div><!-- end col-lg-4 -->
                                                    
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 last sess-background">
                                                        <ul class="check">
                                                            <?php
                                                                    include('inc/config.php');
                                                                    include("functions.php");	
                                                            $f_half = mysqli_query($conn1,"select * from topics_tblstr_d where user='$id' AND `status`='1' AND  track_id % 3 = 1 order by track_id ASC");
                                                                    while($row1=mysqli_fetch_array($f_half)){
                                                                    ?>	
                                                            <li><?php echo $row1['track_name'];?></li>
                                                            <?php } ?>	
                    
                                                        </ul><!-- end check -->
                                                        
                                                    </div><!-- end col-lg-4 --> 
                                                    
                                                    
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 last sess-background">
                                                        <ul class="check">
                                                            <?php
                                                                    include('inc/config.php');
                                                                    include("functions.php");	
                                                            $f_half = mysqli_query($conn1,"select * from topics_tblstr_d where user='$id' AND `status`='1' AND  track_id % 3 = 0 order by track_id ASC");
                                                                    while($row1=mysqli_fetch_array($f_half)){
                                                                    ?>
                                                            <li><?php echo $row1['track_name'];?></li>
                                                            <?php } ?>	
                    
                                                        </ul><!-- end check -->
                                                        
                                                    </div><!-- end col-lg-4 --> 
                                                    
                                                    <hr>
                                                    
                                                </div><!-- end row -->   

                                                <hr class="invis">

                                            

                                            </div><!-- end module -->
                                        </div><!-- end col -->
                                    </div>
                                </div>
                            
                            </div>
                            <!-- Sessions Tab end -->
                            <!-- Important info Tab start -->

                            <div id="menu2" class="tab-pane fade">
                                <div style="margin-top: 20px">
                                    <div class="row">
                                        <div class="col-lg-12" >
                                            <ul>
                                                <li>Healthcare Scientists and Professors</li>
                                                <li>Healthcare Scientists and Professors</li>
                                                <li>Healthcare Scientists and Professors</li>
                                                <li>Healthcare Scientists and Professors</li>
                                                <li>Healthcare Scientists and Professors</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                            <!-- Important info Tab end -->

                        </div>
                        <!-- Tabs end -->
                        </div>

                        <!-- <div class="col-md-8"> -->
                            <!-- <div class="box m30">
                                <h4>ABOUT THE CONFERENCE:</h4>
                                <div role="tabpanel" class="tab-pane active about-cf" id="material">
                                                                                                    
                                <?php echo $r4['home']; ?>
                                </div>
                                                                
                            
                            </div> -->
                            <!-- <div class="btn-wrapper col-md-6">
                                    <a href="sessions" class="btn btn-primary btn-block">View All Sessions</a>
                                </div>
                                <div class="btn-wrapper col-md-6">
                                    <a href="submit-abstract" class="btn btn-warning btn-block">Submit Abstract</a>
                                </div>
                            </div> -->
                            <!-- end col -->

                        <!-- <div class="col-md-4">
                            <div class="box m30">
                                <h4>IMPORTANT DATES:</h4>
                                
                                
                                <div class="row">
                                
                                <div class="">
                                <div class="col-md-12">
                                <div class="alert alert-info">
                                            <strong class="imp-dt">REGISTRATION OPENS:  </strong> <h5>January 27, 2022</h5>
                                        </div>        
                                        </div>
                                        
                                        <div class="col-md-12">
                                <div class="alert alert-success">
                                            <strong class="imp-dt">ABSTRACT SUBMISSION ENDS ON: </strong><h5> <?php echo $r1['abstract_submission_opens']; ?></h5>	
                                        </div>        
                                        </div>
                                        
                                    	<div class="col-md-12">
                                <div class="alert alert-warning">
                                            <strong class="imp-dt">ABSTRACT ACCEPTANCE INTIMATION:</strong><h5><?php echo $r1['abstract_submission_acceptance']; ?></h5>
                                        </div>        
                                        </div>
                                        
                                        
                                        
                                        <div class="col-md-12">
                                <div class="alert alert-danger">
                                            <strong class="imp-dt">EARLY BIRD REGISTRATION ENDS ON:</strong> <h5><?php echo $r1['EarlyBird']; ?></h5>
                                        </div>        
                                        </div>
                                        
                                </div>
                                </div>
                                
                                </div> -->
                    </div><!-- end row -->
				
				

                <hr class="invis">

                 
            </div><!-- end container -->
        </section> 
         
        
<section class="section" style="background: #f6f6f6;">
    <div class="container">
        <div class="section-title text-center">
            <h3>Registration Categories</h3>
            
        </div><!-- end title -->

        <div class="row">
            <div id="mainCont row">
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="border">
                        <div class="p12" style="padding: 30px;">
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="color-black priceNumb">Speaker Registration</span>
                                    <span class="priceNumb color-cyan mb-3" >$699.00</span>
                                    <a href="register" class="btn btn-warning btn-block">Register Now</a>
                                </div>
                                <div class="col-md-8">
                                    <ul class="specsCont">
                                        <li class="propValue">
                                        <i class="fa fa-check color-cyan"></i> Access to all presentations
                                        
                                        </li>
                                        <li class="propValue">
                                        <i class="fa fa-check color-cyan"></i>
                                        Certificate for presentation and participation
                                            
                                        </li>
                                        <li class="propValue">
                                            <i class="fa fa-check color-cyan"></i>
                                            Abstract book of all accepted abstracts
                                        
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="border">
                        <div class="p12" style="padding: 30px;">
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="color-black priceNumb">Poster  Registration</span>
                                    <span class="priceNumb color-cyan mb-3" >$399.00</span>
                                    <a href="register" class="btn btn-warning btn-block">Register Now</a>
                                </div>
                                <div class="col-md-8">
                                    <ul class="specsCont">
                                        <li class="propValue">
                                        <i class="fa fa-check color-cyan"></i> Access to all presentations
                                        
                                        </li>
                                        <li class="propValue">
                                        <i class="fa fa-check color-cyan"></i>
                                        Certificate for presentation and participation
                                            
                                        </li>
                                        <li class="propValue">
                                            <i class="fa fa-check color-cyan"></i>
                                            Abstract book of all accepted abstracts
                                        
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="border">
                        <div class="p12" style="padding: 30px;">
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="color-black priceNumb">Delegate/ Listener</span>
                                    <span class="priceNumb color-cyan mb-3" >$799.00</span>
                                    <a href="register" class="btn btn-warning btn-block">Register Now</a>
                                </div>
                                <div class="col-md-8">
                                    <ul class="specsCont">
                                        <li class="propValue">
                                        <i class="fa fa-check color-cyan"></i> Access to all presentations
                                        
                                        </li>
                                        <li class="propValue">
                                        <i class="fa fa-check color-cyan"></i>
                                        Certificate for presentation and participation
                                            
                                        </li>
                                        <li class="propValue">
                                            <i class="fa fa-check color-cyan"></i>
                                            Abstract book of all accepted abstracts
                                        
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="border">
                        <div class="p12" style="padding: 30px;">
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="color-black priceNumb">Student</span>
                                    <span class="priceNumb color-cyan mb-3" >$349.00</span>
                                    <a href="register" class="btn btn-warning btn-block">Register Now</a>
                                </div>
                                <div class="col-md-8">
                                    <ul class="specsCont">
                                        <li class="propValue">
                                        <i class="fa fa-check color-cyan"></i> Access to all presentations
                                        
                                        </li>
                                        <li class="propValue">
                                        <i class="fa fa-check color-cyan"></i>
                                        Certificate for presentation and participation
                                            
                                        </li>
                                        <li class="propValue">
                                            <i class="fa fa-check color-cyan"></i>
                                            Abstract book of all accepted abstracts
                                        
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- <div class="planCont col-md-3">
                    <div class="priceAndSignupCont">
                        <span class="priceNumb">$699.00<br>Speaker Registration</span>
                        <span class="priceDuration"></span>
                        
                    </div>
                    <ul class="specsCont">
                        <li class="propValue">
                            Access to all presentations
                        
                        </li>
                        <li class="propValue">
                            Certificate for presentation and participation
                            
                        </li>
                        <li class="propValue">
                            Abstract book of all accepted abstracts
                        
                        </li>
                        
                    </ul>
                    <a href="register" class="btn btn-warning btn-block">Register Now</a>
                </div>
                <div class="planCont col-md-3">
                    <div class="priceAndSignupCont">
                        <span class="priceNumb sexyRedTextColor">$399.00<br>Poster Registration</span>
                        <span class="priceDuration"></span>
                        
                    </div>
                    <ul class="specsCont">
                        <li class="propValue">
                            Access to all presentations
                        
                        </li>
                        <li class="propValue">
                            Certificate for presentation and participation
                            
                        </li>
                        <li class="propValue">
                            Abstract book of all accepted abstracts
                        
                        </li>
                        
                    </ul>
                    <a href="register" class="btn btn-warning btn-block">Register Now</a>
                </div>
                <div class="planCont col-md-3">
                    <div class="priceAndSignupCont">
                        <span class="priceNumb">$799.00<br>Delegate/Listener</span>
                        <span class="priceDuration"></span>
                        
                    </div>
                    <ul class="specsCont">
                        <li class="propValue">
                            Access to all presentations
                        
                        </li>
                        <li class="propValue">
                            Certificate for presentation and participation
                            
                        </li>
                        <li class="propValue">
                            Abstract book of all accepted abstracts
                        
                        </li>
                        
                    </ul>
                    <a href="register" class="btn btn-warning btn-block">Register Now</a>
                </div>
                <div class="planCont col-md-3">
                    <div class="priceAndSignupCont">
                        <span class="priceNumb">$349.00<br>Student</span>
                        <span class="priceDuration"></span>
                        </div>
                    <ul class="specsCont">
                        <li class="propValue">
                            Access to all presentations
                        
                        </li>
                        <li class="propValue">
                            Certificate for presentation and participation
                            
                        </li>
                        <li class="propValue">
                            Abstract book of all accepted abstracts
                        
                        </li>
                        
                    </ul>
                    <a href="register" class="btn btn-warning btn-block">Register Now</a>
                </div> -->
                
            </div>
        </div>
	</div>
</section>
        
         

        
        <section class="section db p120" id="venue_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message text-center">
                            <h3>Venue Info</h3>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
		
		
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
    </div><!-- end wrapper -->

    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
 
   </body>
</html>