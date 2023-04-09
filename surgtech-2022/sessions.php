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
                   <h1>Scientific Sessions  </h1>
                 </div>
               </div>
         </div>
       </section>
  
 <section id="" class=""  style="padding: 25px !important;">
        <div class="container">

        <div class="row">
		 
      <div id="Sessions">
     <div class="container">
      <div class="row">
         <div class="col-sm-6 col-md-6">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
			   <ul>
			   <?php
                           include('inc/config.php');
                           include("call.php");	
				 $f_half = mysqli_query($con1,"select * from topics_tblstr_d where user='$id' AND `status`='1' AND  track_id % 2 = 1 order by track_id ASC");
						while($row1=mysqli_fetch_array($f_half)){
						?>	
			   <li><a href="#" style="color: #000;font-size: 16px;" class="" data-toggle="modal" data-target="#Seession<?php echo $row1['track_id'];?>"><?php echo $row1['track_name'];?></a></li> 
				
				<!-- Modal -->

			   <?php } ?>  
			 </ul>

            </div>
          </div>
        </div>
		
		
		<?php
                           include('inc/config.php');
                           include("call.php");	
				 $f_half = mysqli_query($con1,"select * from topics_tblstr_d where user='$id' AND `status`='1' AND  track_id % 2 = 1 order by track_id ASC");
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

<div class="col-sm-6 col-md-6">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
<ul>			   
			   <?php
                           include('inc/config.php');
                           include("call.php");	
				       $f_half2 = mysqli_query($con1,"select * from topics_tblstr_d where user='$id' AND `status`='1' AND  track_id % 2 = 0 order by track_id ASC");
						while($row2=mysqli_fetch_array($f_half2)){
						?> 
			    <li><a href="#" style="color: #000;font-size: 16px;" class="" data-toggle="modal" data-target="#Seession<?php echo $row2['track_id'];?>"><?php echo $row2['track_name'];?></a></li> 
				
				<!-- Modal -->
 
				 <?php } ?>  
			 	</ul>
            </div>
          </div>
        </div>
		
		<?php
                           include('inc/config.php');
                           include("call.php");	
				 $f_half2 = mysqli_query($con1,"select * from topics_tblstr_d where user='$id' AND `status`='1' AND  track_id % 2 = 0 order by track_id ASC");
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
     </div>
		  
        </div>

      </div>
	  
	  <div class="container">
	  <div class="row">
	<div class="col-md-4"></div>
	    <div class="form-group col-md-4">
          <a href="abstract-submission.php">
                  <button   class="btn-submit" id="submit"><b>Submit Abstract</b></button>
                  </a>
                </div>
                	<div class="col-md-4"></div>
		
      </div> 
	  
     </section>
 

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