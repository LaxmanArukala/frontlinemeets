 <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
	   <?php
	   $query = mysqli_query($con1,"select * from banners_tblstr_d WHERE user='$id'");
    $counter = 1;
    while($row = mysqli_fetch_array($query)){
		  $slides = "https://www.auragengroup.com/uploads/photos/".$row['photo'];
			?>
						<div class="item<?php if($counter <= 1){echo " active"; } ?>" style="background-image: linear-gradient(360deg, rgb(27 28 29 / 4%), rgb(12 12 12 / 6%)), url(<?php echo $slides; ?>);">
	      <div class="caption">
            <h1 class="animated fadeInLeftBig"><?php echo $main_title[0]; ?><span> <?php echo $main_title[1]; ?></span></h1>
            <p class="animated fadeInRightBig">Theme : <?php echo $r1['Theme']; ?></p>
            <p class="animated fadeInRightBig"><?php echo $r1['ShortName']; ?></p>
            <p class="animated fadeInRightBig"><?php echo $r1['ConferenceDates']; ?></p>
            <div><a data-scroll class="btn btn-start animated fadeInUpBig" href="<?php echo "https://www.auragengroup.com/uploads/docs/".$pdf_row['program'] ?>" target="_blank">Final Program</a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="brochure-download.php">Brochure Download</a></div><br>
			 <div class="col-md-12">
			 <div id="timer">
			 </div>
			 </div>
			<div class="col-md-6">
			<a data-scroll class="animated fadeInUpBig" href="#About">Abstract Submission Deadline : <?php echo $r1['abstract_submission_opens']; ?>
</a></div>
<div class="col-md-6">
			<a data-scroll class="animated fadeInUpBig" href="#About">Registration Deadline : <?php echo $r1['OnSpot']; ?>
</a></div>
          </div>
        </div>
		<?php
				$counter++;
				}
				
			?>
		<!--<div class="item" style="background-image: linear-gradient(360deg, rgb(27 28 29 / 4%), rgb(12 12 12 / 6%)), url(images/about-bg.jpg);">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"> </span></h1>
            <p class="animated fadeInRightBig">Theme : <?php echo $r1['Theme']; ?>  </p>
            <p class="animated fadeInRightBig"><?php echo $r1['ShortName']; ?></p>
            <p class="animated fadeInRightBig"><?php echo $r1['ConferenceDates']; ?></p>
            <div><a data-scroll class="btn btn-start animated fadeInUpBig" href="<?php echo "https://www.auragengroup.com/uploads/docs/".$pdf_row['program'] ?>" target="_blank">Final Program</a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="brochure-download.php">Brochure Download</a></div><br>
			 <div class="col-md-12">
			  
			 </div>
			<div class="col-md-6">
			<a data-scroll class="animated fadeInUpBig" href="#About">Abstract Submission Deadline : <?php echo $r1['abstract_submission_opens']; ?>
</a></div>
<div class="col-md-6">
			<a data-scroll class="animated fadeInUpBig" href="#About">Registration Deadline : <?php echo $r1['OnSpot']; ?>
</a></div>
          </div>
        </div>-->
		
		<!--<div class="item" style="background-image: linear-gradient(360deg, rgb(27 28 29 / 4%), rgb(12 12 12 / 6%)), url(images/testimonials.jpg);">
          <div class="caption">
             <h1 class="animated fadeInLeftBig"><?php echo $main_title[0]; ?><span> <?php echo $main_title[1]; ?></span></h1>
            <p class="animated fadeInRightBig">Theme : <?php echo $r1['Theme']; ?></p>
            <p class="animated fadeInRightBig"><?php echo $r1['ShortName']; ?></p>
            <p class="animated fadeInRightBig"><?php echo $r1['ConferenceDates']; ?></p>
            <div><a data-scroll class="btn btn-start animated fadeInUpBig" href="<?php echo "https://www.auragengroup.com/uploads/docs/".$pdf_row['program'] ?>" target="_blank">Final Program</a>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="brochure-download.php">Brochure Download</a></div><br>
			 <div class="col-md-12">
			  
			 </div>
			<div class="col-md-6">
			<a data-scroll class="animated fadeInUpBig" href="#About">Abstract Submission Deadline : <?php echo $r1['abstract_submission_opens']; ?>
</a></div>
<div class="col-md-6">
			<a data-scroll class="animated fadeInUpBig" href="#About">Registration Deadline : <?php echo $r1['OnSpot']; ?>
</a></div>
          </div>
        </div>-->
        
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
          <a class="navbar-brand" href="index">
             <img src="images/logo.png" class="img-responsive" style="width:190px;">
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index">Conference Home</a></li>
                <li><a href="https://www.auragengroup.com/about-organizer" target="_blank">About Organizer</a></li>
                </ul>
            </li>
            <li class="scroll"><a href="sessions.php">Scientific Sessions</a></li> 
            <li class="scroll"><a href="abstract-submission.php">Abstract Submission</a></li>                     
           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Info <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="benefits-guidelines.php">Benefits & Guidelines</a></li>
                </ul>
            </li>
            <li class="scroll"><a href="register.php">Register</a></li>
            <li class="scroll"><a href="contact.php">Contact</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->