<?php include ("call.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?php echo $row_meta['title_bars'];?></title>
  <meta content="<?php echo $row_meta['keywords'];?>" name='keywords'/>
  <meta content="<?php echo $row_meta['description'];?>" name='description'/>
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
 </head><!--/head-->

<body>

  <!--.preloader-->
  <!--<div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>-->
  <!--/.preloader-->

 <?php include('header.php');?>
 <section id="cta" class="cta">
 <div id="About">
      <div class="container">

        <div class="row">
          <div class="col-lg-7 text-lg-left">
          
            <h3 align="left">About <span> Webinar </span> </h3>
            <p align="justify">  <?php echo $r4['home']; ?>		</p>

</div>

 
		
		<div class="col-md-5">
        <h3><strong>Testimonials</strong></h3>
        <div class="seprator"></div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
			  
			  <?php
	   $query = mysqli_query($con1,"select * from testimonial_tblstr_d WHERE user='$id'");
    $counter = 1;
    while($row = mysqli_fetch_array($query)){
		  $slides = "https://www.auragengroup.com/uploads/testimonials/".$row['photo'];
			?>
			  
                <div class="item<?php if($counter <= 1){echo " active"; } ?>">
                  <div class="row" style="padding: 20px">
                    <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
                    <p class="testimonial_para" align="justify"><?php echo $row["content"];?></p><br>
                    <div class="row">
                    <div class="col-sm-2">
                        <img src="<?php echo $slides ?>" class="img-responsive" style="width: 80px">
                        </div>
                        <div class="col-sm-10">
                        <h4><strong><?php echo $row["name"];?></strong></h4>
                        <!--<p class="testimonial_subtitle"><span>Chlinical Chemistry Technologist</span><br>-->
                        <p class=" "><span><?php echo $row["affiliation"];?></span> 
                        
                        </p>
                    </div>
                    </div>
                  </div>
                </div>
				<?php
				$counter++;
				}
				
			?>
                
              </div>
            </div>
            <div class="controls testimonial_control pull-right">
                <a class="left fa fa-chevron-left btn btn-default testimonial_btn" href="#carousel-example-generic"
                  data-slide="prev"></a>

                <a class="right fa fa-chevron-right btn btn-default testimonial_btn" href="#carousel-example-generic"
                  data-slide="next"></a>
              </div>
        </div>

<!--<section id="twitter" class="parallax">
  <div> <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a> <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
		
		
		
		
           <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="item wow fadeIn animated active" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeIn;">
			  <div class="col-md-2" align="center">
			  <img src="images/team/1.jpg" class="img-responsive test-img">
			    <h5>Lorem ipsum dolor sit amet</a></h5>
                <h6>Lorem ipsum</a></h6>
			  </div>
			   <div class="col-md-10"> 
			  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit   Sample3</a></p>
              </div>
              </div>
              <div class="item">
			   <div class="col-md-2" align="center">
			  <img src="images/team/2.jpg" class="img-responsive test-img">
			  <h5>Lorem ipsum dolor sit amet</a></h5>
                <h6>Lorem ipsum</a></h6>
			  </div>
               <div class="col-md-10"> 
			     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit   Sample3</a></p>
              </div>
              </div>
              <div class="item">
			   <div class="col-md-2" align="center">
			  <img src="images/team/3.jpg" class="img-responsive test-img">
			  <h5>Lorem ipsum dolor sit amet</a></h5>
                <h6>Lorem ipsum</a></h6>
			  </div>
			  <div class="col-md-10"> 
			     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit   Sample3</a></p>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->

          </div>
          
        </div>

      </div>
      </div>
    </section>
<div id="Sessions">
  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2 align="center">Scientific Sessions</h2>
           </div>
        </div>
		 
        <div class="col-sm-4 col-md-4">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
			   <ul>
			   <?php
                           include('inc/config.php');
                           include("call.php");	
				 $f_half = mysqli_query($con1,"select * from topics_tblstr_d where user='$id' AND `status`='1' AND  track_id % 3 = 2 order by track_id ASC");
						while($row1=mysqli_fetch_array($f_half)){
						?>	
			   <li><a href="#" class="cl2" data-toggle="modal" data-target="#Seession<?php echo $row1['track_id'];?>"><?php echo $row1['track_name'];?></a></li> 
				
				<!-- Modal -->

			   <?php } ?>  
			 </ul>

            </div>
          </div>
        </div>
		
		
		<?php
                           include('inc/config.php');
                           include("call.php");	
				 $f_half = mysqli_query($con1,"select * from topics_tblstr_d where user='$id' AND `status`='1' AND  track_id % 3 = 2 order by track_id ASC");
						while($row1=mysqli_fetch_array($f_half)){
						?>				
			 <div id="Seession<?php echo $row1['track_id'];?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title cl" style="color:#000;"><?php echo $row1['track_name'];?></h4>
      </div>
      <div class="modal-body">
        <p class="cl" style="color:#000;"><?php echo $row1['description'];?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
 <?php } ?> 

<div class="col-sm-4 col-md-4">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
<ul>			   
			   <?php
                           include('inc/config.php');
                           include("call.php");	
				       $f_half2 = mysqli_query($con1,"select * from topics_tblstr_d where user='$id' AND `status`='1' AND  track_id % 3 = 1 order by track_id ASC");
						while($row2=mysqli_fetch_array($f_half2)){
						?> 
			    <li><a href="#" class="cl2" data-toggle="modal" data-target="#Seession<?php echo $row2['track_id'];?>"><?php echo $row2['track_name'];?></a></li> 
				
				<!-- Modal -->
 
				 <?php } ?>  
			 	</ul>
            </div>
          </div>
        </div>
		
		<?php
                           include('inc/config.php');
                           include("call.php");	
				 $f_half2 = mysqli_query($con1,"select * from topics_tblstr_d where user='$id' AND `status`='1' AND  track_id % 3 = 1 order by track_id ASC");
						while($row2=mysqli_fetch_array($f_half2)){
						?>				
			 <div id="Seession<?php echo $row2['track_id'];?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title cl" style="color:#000;"><?php echo $row2['track_name'];?></h4>
      </div>
      <div class="modal-body">
        <p class="cl" style="color:#000;"><?php echo $row2['description'];?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
 <?php } ?>  
		 
		<div class="col-sm-4 col-md-4">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
<ul>			   
			   <?php
                           include('inc/config.php');
                           include("call.php");	
				       $f_half2 = mysqli_query($con1,"select * from topics_tblstr_d where user='$id' AND `status`='1' AND  track_id % 3 = 0 order by track_id ASC");
						while($row2=mysqli_fetch_array($f_half2)){
						?> 
			    <li><a href="#" class="cl2" data-toggle="modal" data-target="#Seession<?php echo $row2['track_id'];?>"><?php echo $row2['track_name'];?></a></li> 
				
				<!-- Modal -->
 
				 <?php } ?>  
			 	</ul>
            </div>
          </div>
        </div>
		
		<?php
                           include('inc/config.php');
                           include("call.php");	
				 $f_half2 = mysqli_query($con1,"select * from topics_tblstr_d where user='$id' AND `status`='1' AND  track_id % 3 = 0 order by track_id ASC");
						while($row2=mysqli_fetch_array($f_half2)){
						?>				
			 <div id="Seession<?php echo $row2['track_id'];?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title cl" style="color:#000;"><?php echo $row2['track_name'];?></h4>
      </div>
      <div class="modal-body">
        <p class="cl" style="color:#000;"><?php echo $row2['description'];?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
 <?php } ?>  
		
		
      </div>
    </div>
   </section><!--/#about-us-->
    </div>
  
<section id="team">
    <div class="pricing-table">
      <div class="container">
      <div class="row">
	   <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Registration Prices</h2>
           </div>
        <div class="col-sm-3">
          <div class="single-table featured wow flipInY animated" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h3>Oral Presentation</h3>
            <div class="price"> $ 249<span></span></div>
           <!-- <ul>
              <li>Consectetur adipisicing elit</li>
              <li>Consectetur </li>
              <li>Consectetur adipisicing</li>
              <li>Consectetur adipisic</li>
            </ul>--><br>
            <a href="#" class="btn btn-lg btn-primary">Register</a></div>
        </div>
        <div class="col-sm-3">
          <div class="single-table featured wow flipInY animated" data-wow-duration="1000ms" data-wow-delay="500ms">
            <h3>Delegate / Listener</h3>
            <div class="price"> $ 199<span> </span></div>
            <!-- <ul>
              <li>Consectetur adipisicing elit</li>
              <li>Consectetur </li>
              <li>Consectetur adipisicing</li>
              <li>Consectetur adipisic</li>
            </ul>--><br>
            <a href="register.php" class="btn btn-lg btn-primary">Register</a></div>
        </div>
        <div class="col-sm-3">
          <div class="single-table featured wow flipInY animated" data-wow-duration="1000ms" data-wow-delay="800ms">
            <h3>E-Poster Presentation</h3>
            <div class="price"> $ 129<span></span></div>
          <!-- <ul>
              <li>Consectetur adipisicing elit</li>
              <li>Consectetur </li>
              <li>Consectetur adipisicing</li>
              <li>Consectetur adipisic</li>
            </ul>--><br>
            <a href="register.php" class="btn btn-lg btn-primary">Register</a></div>
        </div>
        <div class="col-sm-3">
          <div class="single-table featured wow flipInY animated" data-wow-duration="1000ms" data-wow-delay="1100ms">
            <h3>Student Delegate</h3>
            <div class="price"> $ 99 <span></span></div>
           <!-- <ul>
              <li>Consectetur adipisicing elit</li>
              <li>Consectetur </li>
              <li>Consectetur adipisicing</li>
              <li>Consectetur adipisic</li>
            </ul>--><br>
            <a href="register.php" class="btn btn-lg btn-primary">Register </a></div>
        </div>
      </div>
      </div>
    </div>
 </section><!--/#about-us-->
 <!-- <section id="team">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Speakers</h2>
           </div>
      </div>
      <div class="team-members">
        <div class="row">
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/1.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Speaker Name</h3>
                <h4>Consectetur adipisicing elit </h4>
                </div>
              
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/2.jpg" alt="">
              </div>
               <div class="member-info">
                <h3>Speaker Name</h3>
                <h4>Consectetur adipisicing elit </h4>
                </div>
              
            </div>
            </div>
            <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/3.jpg" alt="">
              </div>
               <div class="member-info">
                <h3>Speaker Name</h3>
                <h4>Consectetur adipisicing elit </h4>
                </div>
              
            </div>
            </div>
           <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/4.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>Speaker Name</h3>
                <h4>Consectetur adipisicing elit </h4>
                </div>
              
            </div>
            </div>
          </div>
        </div>
      </div>            
    </div>
  </section><!--/#team-->

   

<div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2 style="color:#000;">Media Partners</h2>
           </div>
      </div>
        <div class="col-sm-12 col-xs-6 col-md-12 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
         <a href="https://www.clocate.com/" target="_blank" title="Clocate"> <img src="images/media/Clocate.jpg" class="img-responsive"></a>
		 <hr>
		 <p align="justify" style="color:#000;">Clocate.com is a leading international directory for worldwide conferences and exhibitions. Clocate.com is equipped with a unique and comprehensive search that helps you find easily any event in any category or location.  Each event includes detailed information, like, description, dates, location, map, prices, link to the official event's  website and more... If you search for a conference or exhibition in areas such as Industry and manufacturing, Health and medicine, Technology and IT, Business and finance, sciences, education, services (banking, insurance, tourism, Hospitality and more), government, environment, life style and arts, you'll find it in Clocate.com. </p>
        </div> 
        <div class="col-sm-12 col-xs-6 col-md-12 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
          <a href="https://www.venuedir.com/" target="_blank" title="Venuedir"> <img src="images/media/Venuedir.jpg" class="img-responsive"></a>
		  <hr>
		   <p align="justify" style="color:#000;">VenueDir is a leading directory for major venues around the world with a search by location, size of venue or type of event (conference, seminar, exhibition, wedding and others). In VenueDir you can find the services provided by the venue, including, food and beverages, accomodation, onsite parking, on-site support, audio and video and more. Venuedir provides an option to submit a request for proposal (RFP) to all suitable venues.</p>
        </div> 
                        
      </div>
  
  <section id="contact">
    
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Contact Us</h2>
           </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
			<div id="msgSubmit" class="h3 text-center hidden"></div> 
              <form role="form" id="contactForm" class="contact-form" data-toggle="validator" class="shake">
			  <div class="error-container"></div>
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" id="name" class="form-control" placeholder="Name" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required="required">
                    </div>
                  </div>
                </div>
				<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
				<div class="col-sm-6">
                <div class="form-group">
                  <input type="text" name="phone" id="phone" class="form-control" placeholder="Mobile Number" required="required">
                </div> 
                </div> 
				<div class="col-sm-6">
				<div class="form-group">
                  <input type="text" name="subject" id="msg_subject" class="form-control" placeholder="Subject" required="required">
                </div>
                </div>
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required" style="min-height:90px !important"></textarea>
                </div>                        
                <div class="form-group">
                  <button type="submit" class="btn-submit" id="submit">Send Now</button>
                </div>
              </form>   
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                 <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Address:</span> Begumpet, Hyderabad-500016 </li>
                  <li><i class="fa fa-phone"></i> <span> Phone:</span> +91 9989 661 232  </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:<?php echo $r1['EmailId1'];?>"> <?php echo $r1['EmailId1'];?> </a></li>
                   </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->
  
  <?php include('footer.php');?>
  

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/contact-form-script.js"></script>
  <script>
  $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
  </script>
  <script>
  function updateTimer() {
    future = Date.parse("<?php echo $r1[timer];?>");
    now = new Date();
    diff = future - now;

    days = Math.floor(diff / (1000 * 60 * 60 * 24));
    hours = Math.floor(diff / (1000 * 60 * 60));
    mins = Math.floor(diff / (1000 * 60));
    secs = Math.floor(diff / 1000);

    d = days;
    h = hours - days * 24;
    m = mins - hours * 60;
    s = secs - mins * 60;

    document.getElementById("timer")
        .innerHTML =
        '<div>' + d + '<span>days</span></div>' +
        '<div>' + h + '<span>hours</span></div>' +
        '<div>' + m + '<span>minutes</span></div>' +
        '<div>' + s + '<span>seconds</span></div>';
}
setInterval('updateTimer()', 1000);
  </script>

</body>
</html>