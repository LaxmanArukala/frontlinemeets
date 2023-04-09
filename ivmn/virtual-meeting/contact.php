<?php 
 include('call.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> <?php echo $main_title[0]; ?> <?php echo $main_title[1]; ?>  </title>
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
 <?php include('header-inner.php');?>
  
  <section class="bgimage">
         <div class="container-fluid">
              <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <h1>Contact  </h1>
                 </div>
               </div>
         </div>
       </section>
  
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
   
<!--call back-->
  <script>
  $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
  </script>

</body>
</html>