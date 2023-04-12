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
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="style-final.css">
 
</head>
<body>  

    
    <div id="wrapper">
        
 <?php include('header.php');?>
       

        <section class="parallax event-section" data-stellar-background-ratio="0.5" style="background:url('images/slide/Slide-1.jpg');background-size:cover;box-shadow:inset 0 0 0 2000px rgb(14 14 14 / 62%);">
  
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message event-title text-left">
                            <h3><span class="short-h"><?php echo $main_title[0]; ?> </span><br>
							<?php echo $main_title[1]; ?></h3>
                            <!--<p class="text-white"><b><i class="fa fa-calendar" aria-hidden="true"></i> 16-18 July, 2021</b></p>-->
                            <p class="text-white"><b>Theme:  </b><?php echo $r1['Theme'];?></p>
							
							
                           
							  <a href="submit-abstract" class="btn btn-primary">Submit Abstract<br></a>
                            <a href="register" class="btn btn-primary">Register Now<br></a>
							
                        </div>
						<br>
						<!--<div align="center" id="timer">
			                </div>-->
						<p></p>
						<div align="left" class="col-md-6">
							 <a href="#"class="cl-w"><p class="text-white"><b>ABSTRACT SUBMISSION DEADLINE</b></p> <p class="text-white"><b><?php echo $r1['abstract_submission_opens']; ?></b></p></a>
							 </div>
							 <div  align="right" class="col-md-6">
                            <a href="#" class="cl-w"><p class="text-white"><b>EARLY BIRD REGISTRATION DEADLINE </b></p> <p class="text-white"><b> <?php echo $r1['EarlyBird']; ?></b></p></a>
							</div>
							<hr>
							<div class="col-md-12 imp-bg">
							
							<div class="row">
							<div class="col-md-4">
					<h4 class="text-center imp-icons-tx"><i class="fa fa-calendar"></i> Date </h4>
					<hr>
					<h4 class="text-center imp-icons-tx"><?php echo $r1['ConferenceDates']; ?></h4>
					</div>
					<div class="col-md-4">
					<h4 class="text-center imp-icons-tx"><i class="fa fa-map-marker"></i>  Location </h4>
					<hr>
					<h4 class="text-center imp-icons-tx"><?php echo $r1['ConferenceVenue']; ?></h4>
					</div>
					<div class="col-md-4">
					<h4 class="text-center imp-icons-tx"><i class="fa fa-file-text-o"></i> Download </h4>
					<hr>
					<h4 class="text-center imp-icons-tx"><a href="program.pdf" target="_blank" class="text-white" style="color:#fff;"> Program</a></h4>
					</div>
					</div>
					</div>
                    </div><!-- end col -->
					
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
<div class="popup-btn">
				<a href="download-brochure">&nbsp;&nbsp; Download Brochure &nbsp;&nbsp;</a>
			</div>
         <!--<section class="section gb">
            <div class="container">
                <div class="section-title text-center">
                    <h3>ORGANIZING COMMITTEE MEMBERS </h3>
                    
                </div>  

                <div id="owl-01" class="owl-carousel owl-theme owl-theme-01">
                    <div class="caro-item">
                        <div class="speaker-box">
                            <div class="image-wrap entry">
                                <img src="images/1.png" alt="" class="img-responsive">
                                
                            </div> 
                            <div class="speaker-details">
                                <h4>
                                     <a href="#" title="">Dr. Manon Bolliger</a>
                                </h4>
                                <p>The Bowen College Inc. Canada</p>
                            </div> 
                            <div class="speaker-footer clearfix">
                                <div align="center" class=" ">
                                     <b>View Biography</b>
                                </div> 
                                
                            </div> 
                        </div> 
                    </div> 

                    <div class="caro-item">
                        <div class="speaker-box">
                            <div class="image-wrap entry">
                                <img src="images/2.jpg" alt="" class="img-responsive">
                              
                            </div> 
                            <div class="speaker-details">
                                <h4>
                                     <a href="#" title="">Dr. William Clearfield</a>
                                </h4>
                                <p>American Osteopathic Society of Rheumatic Diseases
United States</p>
                            </div> 
                            <div class="speaker-footer clearfix">
                                <div align="center" class=" ">
                                     <b>View Biography</b>
                                </div> 
                                </div> 
                        </div> 
                    </div> 

                    <div class="caro-item">
                        <div class="speaker-box">
                            <div class="image-wrap entry">
                                <img src="images/3.jpg" alt="" class="img-responsive">
                                 
                            </div> 
                            <div class="speaker-details">
                                <h4>
                                     <a href="#" title="">Dr. Wai-Ching Lee</a>
                                </h4>
                                <p>Earth Heart, Singapore</p>
                            </div> 
                            <div class="speaker-footer clearfix">
                                <div align="center" class=" ">
                                     <b>View Biography</b>
                                </div> 
                            </div> 
                        </div> 
                    </div> 

                    <div class="caro-item">
                        <div class="speaker-box">
                            <div class="image-wrap entry">
                                <img src="images/4.jpg" alt="" class="img-responsive">
                                
                            </div> 
                            <div class="speaker-details">
                                <h4>
                                     <a href="#" title="">Dr. TruthSayer </a>
                                </h4>
                                <p>Institute of Auricular & Transcendental Medicine
United States</p>
                            </div> 
                            <div class="speaker-footer clearfix">
                                <div align="center" class=" ">
                                     <b>View Biography</b>
                                </div> 
                            </div> 
                        </div> 
                    </div> 

                    
                </div> 

                <hr class="invis">

                <div class="section-button text-center">
                    <a href="#" class="btn btn-primary">View All Committee Members</a>
                </div>
            </div> 
        </section>-->
		
		 <section class="section db p120">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tagline-message text-center">
                            <h3> </h3>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop" style="padding: 0em !important;">
            <div class="container">
                <div class="row">
                     

                    <div class="col-md-8">
                        <div class="box m30">
                             <h4>ABOUT THE CONFERENCE:</h4>
                            <div role="tabpanel" class="tab-pane active about-cf" id="material">
                                                             						 			
                             <?php echo $r4['home']; ?>
                                                             </div>
															 
                           
                        </div>
						 <div class="btn-wrapper col-md-6">
                                <a href="sessions" class="btn btn-primary btn-block">View All Sessions</a>
                            </div>
							<div class="btn-wrapper col-md-6">
                                <a href="submit-abstract" class="btn btn-primary btn-block">Submit Abstract</a>
                            </div>
						</div><!-- end col -->

                     <div class="col-md-4">
                        <div class="box m30">
                             <h4>IMPORTANT DATES:</h4>
							 
							 
							 <div class="row">
							 
							 <div class="">
							   <div class="col-md-12">
							   <div class="alert alert-info">
										  <strong class="imp-dt">REGISTRATION OPENS:  </strong> <h5><?php echo $r1['ConferenceDates']; ?></h5>
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
							 
							 </div>
                </div><!-- end row -->
				
				

                <hr class="invis">

                 
            </div><!-- end container -->
        </section> 
         
        <section class="section sess-bg" style="padding: 0em !important;">
            <div class="container">
                <div class="row">
                    <!--<div class="col-md-4 hidden-sm hidden-xs">
                        <div class="custom-module">
                            <img src="images/presentation.jpg" alt="" class="img-responsive wow slideInLeft">
                        </div> 
                    </div> -->
                    <div class="col-lg-12" >
                        <div class="custom-module p40l">
                            <h2>Submit the abstract according to your session interest. Please follow the format of our 

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
								<!--<div align="center" class="btn-wrapper col-md-6">
                                <a href="#" class="btn btn-primary btn-block">View All Sessions</a>
                            </div>
							<div align="center" class="btn-wrapper col-md-6">
                                <a href="#" class="btn btn-primary btn-block">Submit Abstract</a>
                            </div>-->
                            </div><!-- end row -->   

                            <hr class="invis">

                           

                        </div><!-- end module -->
                    </div><!-- end col -->
					
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
		<p></p>
		<p></p>
<section class="section" style="background: #f6f6f6;">
            <div class="container">
                <div class="section-title text-center">
                    <h3>Registration Categories</h3>
                 
                </div><!-- end title -->

                <div class="row">
  <div id="mainCont row">
		<div class="planCont col-md-3">
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
			<a href="register" class="btn btn-primary btn-block">Register Now</a>
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
			<a href="register" class="btn btn-primary btn-block">Register Now</a>
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
			<a href="register" class="btn btn-primary btn-block">Register Now</a>
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
			<a href="register" class="btn btn-primary btn-block">Register Now</a>
		</div>
		 
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
                    <div class="col-md-6">
                        <div class="box m30">
                            
                            <h4>Venue</h4>
                             <img src="images/attraction1.jpg" class="img-responsive img-thumbnail" height="376">
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <div class="box m30">
 
                            <h4>Location</h4>
                             <iframe src="<?php echo $venue_hospitality_row['map'];?>" width="100%" height="330"   allowfullscreen="" class="pm" ></iframe>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis">

                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                             <div class="shop-extra">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#home">Venue Detail</a></li>
                                   <!-- <li><a data-toggle="tab" href="#menu1">Travel </a></li>
                                    <li><a data-toggle="tab" href="#menu2">Visa Info</a></li>-->
                                </ul>

                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">
                                         <?php echo	$venue_hospitality_row['venue_content'];?>
                                    </div>
                                   <!-- <div id="menu1" class="tab-pane fade">
                                        <h3>Travel</h3>
                                        
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <h3>Visa Info</h3>

                                         
                                    </div>-->
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