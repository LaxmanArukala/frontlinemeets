<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> <?php echo $main_title[0]; ?> <?php echo $main_title[1]; ?> | Home  </title>
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
 </head><!--/head-->

<body>

  <!--.preloader-->
  <!--<div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>-->
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: linear-gradient(360deg, rgb(27 28 29 / 4%), rgb(12 12 12 / 6%)), url(images/slider/1.jpg);">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"> </span></h1>
            <p class="animated fadeInRightBig">Theme :  </p>
            <p class="animated fadeInRightBig">matsc-2021</p>
            <p class="animated fadeInRightBig"> </p>
            <div><a data-scroll class="btn btn-start animated fadeInUpBig" href="#About">Final Program</a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#About">Brochure Download</a></div><br>
			 <div class="col-md-12">
			 <div id="timer">
			 </div>
			 </div>
			<div class="col-md-6">
			<a data-scroll class="animated fadeInUpBig" href="#About">Abstract Submission Deadline : 
</a></div>
<div class="col-md-6">
			<a data-scroll class="animated fadeInUpBig" href="#About">Registration Deadline : 
</a></div>
          </div>
        </div>
		
		<div class="item" style="background-image: linear-gradient(360deg, rgb(27 28 29 / 4%), rgb(12 12 12 / 6%)), url(images/about-bg.jpg);">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"> </span></h1>
            <p class="animated fadeInRightBig">Theme :  </p>
            <p class="animated fadeInRightBig">matsc-2021</p>
            <p class="animated fadeInRightBig"><?php echo $r1['ConferenceDates']; ?></p>
            <div><a data-scroll class="btn btn-start animated fadeInUpBig" href="#About">Final Program</a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#About">Brochure Download</a></div><br>
			 <div class="col-md-12">
			  
			 </div>
			<div class="col-md-6">
			<a data-scroll class="animated fadeInUpBig" href="#About">Abstract Submission Deadline : 
</a></div>
<div class="col-md-6">
			<a data-scroll class="animated fadeInUpBig" href="#About">Abstract Submission Deadline : 
</a></div>
          </div>
        </div>
		
		<div class="item" style="background-image: linear-gradient(360deg, rgb(27 28 29 / 4%), rgb(12 12 12 / 6%)), url(images/testimonials.jpg);">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">International WebNar :<span> Material Science</span></h1>
            <p class="animated fadeInRightBig">Theme : A powerful way to deal, improve and figure Molecules, Materials and Medicines</p>
            <p class="animated fadeInRightBig">matsc-2021</p>
            <p class="animated fadeInRightBig">MAY 18-19, 2021 | 10:00 - 03:00 GMT</p>
            <div><a data-scroll class="btn btn-start animated fadeInUpBig" href="#About">Final Program</a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#About">Brochure Download</a></div><br>
			 <div class="col-md-12">
			  
			 </div>
			<div class="col-md-6">
			<a data-scroll class="animated fadeInUpBig" href="#About">Abstract Submission Deadline :13/05/2021
</a></div>
<div class="col-md-6">
			<a data-scroll class="animated fadeInUpBig" href="#About">Abstract Submission Deadline :13/05/2021
</a></div>
          </div>
        </div>
        
      </div>
     <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a> 

      <a id="tohash" href="#About"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">
            <h1>LOGO</h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.php">Conference Home</a></li>
                <li><a href="#">About Organizer</a></li>
                </ul>
            </li>
            <li class="scroll"><a href="#Sessions">Scientific Sessions</a></li> 
            <li class="scroll"><a href="#">Abstract Submission</a></li>                     
           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Info <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Benefits & Guidelines</a></li>
                </ul>
            </li>
            <li class="scroll"><a href="#">Register</a></li>
            <li class="scroll"><a href="#contact">Contact</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
 <section id="cta" class="cta">
 <div id="About">
      <div class="container">

        <div class="row">
          <div class="col-lg-7 text-lg-left">
          
            <h3 align="left">About <span> Conference </span> </h3>
            <p align="justify"> 	</p>

</div>

<div class="col-md-5">
        <h3><strong>Testimonials</strong></h3>
        <div class="seprator"></div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <div class="row" style="padding: 20px">
                    <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
                    <p class="testimonial_para" align="justify">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en.</p><br>
                    <div class="row">
                    <div class="col-sm-2">
                        <img src="images/team/1.jpg" class="img-responsive" style="width: 80px">
                        </div>
                        <div class="col-sm-10">
                        <h4><strong>Jack Andreson</strong></h4>
                        <!--<p class="testimonial_subtitle"><span>Chlinical Chemistry Technologist</span><br>-->
                        <p class=" "><span>Chlinical Chemistry Technologist</span><br>
                        <span>Officeal All Star Cafe</span>
                        </p>
                    </div>
                    </div>
                  </div>
                </div>
               <div class="item">
                   <div class="row" style="padding: 20px">
                    <button style="border: none;"><i class="fa fa-quote-left testimonial_fa" aria-hidden="true"></i></button>
                    <p class="testimonial_para" align="justify">Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo-Text "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en.</p><br>
                    <div class="row">
                    <div class="col-sm-2">
                        <img src="images/team/2.jpg" class="img-responsive" style="width: 80px">
                        </div>
                        <div class="col-sm-10">
                        <h4><strong>Kiara Andreson</strong></h4>
                        <p class=" "><span>Chlinical Chemistry Technologist</span><br>
                        <span>Officeal All Star Cafe</span>
                        </p>
                    </div>
                    </div>
                  </div>
                </div>
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
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Scientific Sessions</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            
          </div>
        </div>
        <div class="col-sm-3">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
             <ul>
			  <?php
                           include('inc/config.php');
                           include("call.php");	
				 $f_half = mysqli_query($con1,"select * from topics_tblstr_d where user='$id' AND `status`='1' AND  track_id % 2 = 1 order by track_id ASC");
						while($row1=mysqli_fetch_array($f_half)){
						?>	
			  <li><?php echo $row1['track_name'];?></li> 
			   <?php } ?>  
				</ul>
            </div>
          </div>
        </div>
		<div class="col-sm-3">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
             <ul>
			   <?php
                           include('inc/config.php');
                           include("call.php");	
				 $f_half = mysqli_query($con1,"select * from topics_tblstr_d where user='$id' AND `status`='1' AND  track_id % 2 = 0 order by track_id ASC");
						while($row2=mysqli_fetch_array($f_half)){
						?>
			    <li><?php echo $row2['track_name'];?></li> 
				 <?php } ?>  
				</ul>
            </div>
          </div>
        </div>
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
            <a href="#" class="btn btn-lg btn-primary">Register</a></div>
        </div>
        <div class="col-sm-3">
          <div class="single-table featured wow flipInY animated" data-wow-duration="1000ms" data-wow-delay="800ms">
            <h3>E-Poster Presentation</h3>
            <div class="price"> $ 99<span></span></div>
          <!-- <ul>
              <li>Consectetur adipisicing elit</li>
              <li>Consectetur </li>
              <li>Consectetur adipisicing</li>
              <li>Consectetur adipisic</li>
            </ul>--><br>
            <a href="#" class="btn btn-lg btn-primary">Register</a></div>
        </div>
        <div class="col-sm-3">
          <div class="single-table featured wow flipInY animated" data-wow-duration="1000ms" data-wow-delay="1100ms">
            <h3>E-Poster Presentation</h3>
            <div class="price"> $ 99 <span></span></div>
           <!-- <ul>
              <li>Consectetur adipisicing elit</li>
              <li>Consectetur </li>
              <li>Consectetur adipisicing</li>
              <li>Consectetur adipisic</li>
            </ul>--><br>
            <a href="#" class="btn btn-lg btn-primary">Register </a></div>
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

  <section id="features" class="parallax">
    <div class="container">
      <div class="row count">
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i class="fa fa-users"></i>
          <h3 class="timer">400</h3>
          <h3>Participants</h3>
        </div>
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
          <i class="fa fa-video-camera"></i>
          <h3 class="timer">200</h3>                    
          <h3>Webinars</h3>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
          <i class="fa fa-file-text"></i>
          <h3 class="timer">100</h3>                    
          <h3>Presentations</h3>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
          <i class="fa fa-microphone"></i>                    
          <h3>350</h3>
          <h3>Sessions</h3>
        </div>                 
      </div>
    </div>
  </section><!--/#features-->

  
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
              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                </div>                        
                <div class="form-group">
                  <button type="submit" class="btn-submit">Send Now</button>
                </div>
              </form>   
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                 <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Address:</span> Lorem ipsum dolor sit amet, </li>
                  <li><i class="fa fa-phone"></i> <span> Phone:</span> +91 123 456 7890  </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href=" "> matsc@auragengroup.com</a></li>
                   </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="#">LOGO</a>
        </div>
        <div class="social-icons">
          <ul> 
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>  
            <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>  
             <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li> 
          </ul>
		  <div class="col-sm-12">
            <p align="center">&copy; 2021 All Rights Reserved by Auragengroup.</p>
          </div>
        </div>
      </div>
    </div>
    <!--<div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <p align="center">&copy; 2021 All Rights Reserved by Auragengroup.</p>
          </div>
          
        </div>
      </div>
    </div>-->
  </footer>

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
  <script>
  function updateTimer() {
    future = Date.parse("Jun 22, 2021 11:30:00");
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