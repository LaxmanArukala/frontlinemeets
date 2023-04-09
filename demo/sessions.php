<!doctype html>
 <html class="no-js " lang="en">  
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- Site Meta -->
    <title> </title>
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
 
</head>
<body>  

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

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

        
		 <section class="section sess-bg gb" style="padding: 0em !important;">
            <div class="container">
                 <div class="boxed boxedp4">
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

<mark>Sample Template </mark> </h2>

                            

                            <hr class="invis">

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 first sess-background">
                                    <ul class="check">
                                        <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Acupuncture</li>
                                        <li>Traditional chinese medicine</li>

<li>Environmental protection</li>

<li>Environmental protection</li>

<li>Ethnopharmacology</li>

<li>Herbal therapies</li>

<li>Herbals in cosmetics and skincare</li>

<li>History and philosophy of herbal medicine</li>

<li>Human ecology</li>

<li>Medicinal and aromatic plants</li>

<li>Neuraltherapy</li>
<li>Pathology and clinical medicine</li>

<li>Perspectives in healthcare</li>

<li>Phytovigilance of herbal medicines</li>

<li>Yoga and mindfulness</li>

<li>Neuraltherapy</li>

 



                                    </ul><!-- end check -->
									  
                                </div><!-- end col-lg-4 -->
                                
                                <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 last sess-background">
                                    <ul class="check">
									<li>ayurveda</li>

<li>Botanical medicines</li>

<li>Arabic and unani medicine</li>

<li>Healthy aging and preventive health</li>

<li>Herbal medicine</li>
                                        
<li>Herbals in cancer therapy</li>

<li>Herbal market</li>

<li>Holistic medicine</li>

<li>Manual therapy</li>

<li>Mind and body medicine</li>

<li>Osteopathy</li>

<li>Personalized medicine</li>

<li>Pharmacognosy and phytochemistry</li>

<li>Plants and essential oils</li>

<li>Recent advances in herbs and natural remedies</li>

<li>Bridging traditional chinese medicine and molecular pharmacology</li>
                                    </ul><!-- end check -->
									 
                                </div><!-- end col-lg-4 --> 
								<hr>
								<div align="center" class="btn-wrapper col-md-6">
                                <a href="#" class="btn btn-primary btn-block">Submit Abstract</a>
                            </div>
							<div align="center" class="btn-wrapper col-md-6">
                                <a href="#" class="btn btn-primary btn-block">Submit Abstract</a>
                            </div>
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

	 <script>
  function updateTimer() {
    future = Date.parse("July 16, 2021 10:00:00");
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