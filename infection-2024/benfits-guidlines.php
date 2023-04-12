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
    <title><?php echo $row_meta['speakers_title_bars'];?></title>

   <meta content="<?php echo $row_meta['speakers_keywords'];?>" name='keywords'/>
  
  <meta content="<?php echo $row_meta['speakers_description'];?>" name='description'/>
    
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
 .container .title{
  color: #1a1a1a;
  text-align: center;
  margin-bottom: 10px;
}
.section.db {
    background-color: #14a098;
    
}
.section {
    background-color: #ffffff;
    padding: 4rem 0;
    position: relative;
    display: block;
}
.tagline-message h3 {
    padding: 0;
    font-size: 34px;
    margin: 0;
    color: #ffffff;
    font-weight: bold;
}
.content {
    position: relative;
    width: 200px;
    height: 200px;
    /* max-width: 400px; */
    /* margin: auto; */
    overflow: hidden;
    /* border-radius: 50%; */
}
.cop-logo img, a {
    color: #000;
    text-decoration: none !important;
    -webkit-transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    transition: all ease 0.3s;
}
.content .content-overlay {
    background: rgba(0,0,0,0.7);
    position: absolute;
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    opacity: 0;
    -webkit-transition: all 0.4s ease-in-out 0s;
    -moz-transition: all 0.4s ease-in-out 0s;
    transition: all 0.4s ease-in-out 0s;
}
.content-image {
    width: 100%;
}
.fadeIn-bottom {
    top: 80%;
}
.content-details {
    position: absolute;
    text-align: center;
    /* padding-left: 1em; */
    /* padding-right: 1em; */
    width: 100%;
    /* text-decoration: underline; */
    top: 50%;
    left: 20%;
    opacity: 0;
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -webkit-transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s;
}
.content-details h3 {
    color: #fff;
    font-weight: 500;
    font-size: 17px;
    letter-spacing: 0.15em;
    margin-bottom: 0.5em;
    text-transform: uppercase;
}
.content-details p {
    color: #fff;
    font-size: 0.8em;
}
.content:hover .content-details {
    top: 50%;
    left: 50%;
    opacity: 1;
}
.content:hover .content-overlay {
    opacity: 1;
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
                            <h3>Benefits & Guidelines</h3>
                            
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
    
		<section class="section gb nopadtop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-5" style="margin-bottom: 2rem;">
                            <h4 class="mb-3 fw-bold" style="font-weight: 600;">BENEFITS OF ATTENDING:</h4>
                            <p>Professional worldview</p>
                            <p>International Recognition of Researches</p>
                            <p>Knowledge into Asset</p>
                            <p>Cognizance of leading Cutting-Edge Technologies</p>
                            <p>Exposure to the upcoming business trends</p>
                            <p>New Accomplishments with Edu-tech ideas</p>
                            <p>Publication of Abstracts in preeminent supported journal</p>
                            <p>Further up gradation of profile with our Global Network</p>
                            <p>Free access to our forthcoming International event</p>
                            <p>Certificate of Presentation with International signatories</p>
                        </div>
                        <div class="mb-5"  style="margin-bottom: 2rem;">
                            <h4 class="mb-3 fw-bold" style="font-weight: 600;">GUIDELINES FOR SPEAKERS:</h4>
                            <p>Laptop, Projector, Microphone will be provided by the Organization. </p>
                            <p>We suggest you to please carry your presentation in a flash drive or you can submit your presentation to info@frontlinemeets.com.</p>
                            <p>All the presentation should be in Power-point. Make sure your slides are readable.</p>
                            <p>Keep the number of slides to a minimum (up to 10 slides), don’t overload slides. </p>
                            <p>Use simple sentences; avoid jargon, highly specialized vocabulary and unfamiliar abbreviations.</p>
                            <p>Make your slides interesting; don’t just read out a list of bullet points from each slide. </p>
                            <p>Judicious use of photos/graphics can be very helpful.</p>
                            <p>Using too many different colors, fonts, and graphics will distract the audience.</p>
                            <p>Keep graphs and tables simple, and make sure they are legible and appropriately labeled.</p>
                            <p>No videos will be recorded</p>
                            <p>Allow at least 5 minutes at the end of your presentation for questions.</p>
                            <p>Question periods, thanks and acknowledgment of the speakers will take place during the session or after completion of the session, so please stay until the session ends.</p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                        </div>
                        <div class="mb-5"  style="margin-bottom: 2rem;">
                            <h4 class="mb-3 fw-bold" style="font-weight: 600;">PRESENTATION FORMAT:</h4>
                            <p>Laptop and A/V equipment will be set up in the room before the presentation.</p>
                            <p>We suggest presenters set the page for “On-Screen Show (4:3) with a width of 10” and a height of 7.5”.</p>
                            <p>We recommend an easy to read typeface (font type) for slides, like Times New Roman, Cambria or Arial.</p>
                            <p>We recommend presenters use color for emphasis only. White or black lettering on a blue the background is easy to read.</p>
                            <p>Avoid light lettering on a light background, red or green text and please be considerate of those who are color blind. </p>
                        </div>
                        <div class="mb-5"  style="margin-bottom: 2rem;">
                            <h4 class="mb-3 fw-bold" style="font-weight: 600;">FOR POSTER PRESENTERS:</h4>
                            <p>The poster session gives an opportunity to interact with senior faculty and share your ideas and get the suggestions in return which make this session an interactive and encouraging bit for the young researchers.</p>
                            <p>The poster size must be 1-meter X 1-meter, arid pasting materials will be provided to each presenter. We encourage you to paste the posters 1 hour prior to the start time of poster sessions as per the final program.</p>
                            <p>Poster evaluation and certificate distribution will be done by the judges. Poster awards will be presented on the day of the closing ceremony.</p>
                            <p>Poster Presenter need to carry a printed content in the form of poster which will be placed in a poster stand provided by the organization.</p>
                            <p>No electronic poster will be accepted for the presentation at the venue.</p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                        </div>
                        <div class="mb-5"  style="margin-bottom: 2rem;">
                            <h4 class="mb-3 fw-bold" style="font-weight: 600;">E-POSTER PRESENTATION:</h4>
                            <p>E-Posters Presenter is not required to join the conference in person. The Poster (in PDF form) will be electronically projected during the poster session area. E-Poster abstract will be published in the Proceeding book. Presenters will be provided with E-Certificate during the post-conference works.</p>
                            <p>If there are any questions from the attendees, it will be sent to the respective speaker by email.</p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                        </div>
                        <div class="mb-5"  style="margin-bottom: 2rem;">
                            <h4 class="mb-3 fw-bold" style="font-weight: 600;">CERTIFICATION:</h4>
                            <p>All the attendees (except oral presentation) will be provided with the delegate certification signed by the ORGANIZING COMMITTEE MEMBER (OCM). Name and affiliation on the certificates will be printed as per the records filled during the registration process. For any changes or requests regarding the certification— please contact us before one month of the conference.</p>
                        </div>
                       
                        
                    </div>
                </div>
            </div>
        </section>
 
        <?php include('footer.php');?>

    <!-- jQuery Files -->
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