<?php
// include('functions.php');
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
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
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
                            <h3>Invited Speakers</h3>
                            
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
    
		<section class="section gb nopadtop">
             <?php                  
		include("config/config.php"); 
// 		include("functions.php");	
		$query  = "SELECT * FROM invited_speakers_tblstr_d where user = 11 ORDER BY recordListingID ASC";
		$result = mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)		
			{								
		
		?>	
			
        <section class="section gb">
            <div class="container">
                  <?php
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))	
			{	
			if($row['photo']!="")	
			{							
		$img_pth = "https://www.auragengroup.com/uploads/speakers/".$row['photo'];	
		}			
		
		 					
		?> 
                    <div align="center" class="col-md-3">
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
						 

<!--<div class="modal fade" id="speaker<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
       <div class="modal-body">
	  <div class="row">
      <div class="col-lg-4 mt-4">
			<div class="member d-flex align-items-start">
			  <div class="pic"><img src="<?php echo $img_pth;?>" class="img-fluid" alt=""></div>
			  </div>
			  </div>
			   <div class="col-lg-6 mt-4">
			  <div class="member-info">
				<p class="member-heading"><?php echo $row['name'];?></p>
				 <p class="member-para"><?php echo $row['affiliation'];?></p>
				 
			  </div>
			  </div>
			  </div>
			  <div class="row">
			  <div class="col-lg-12 mt-4">
			  <b>Biography:</b>
			  <p align="justify"><?php echo $row['biography'];?>
		        </p>
			  </div>
			  </div>
			</div>
		  
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
    </div>
	</div>
  </div>-->
					 
 
                                     <?php } ?>	

                     
					</div> 
                  <hr class="invis">

                 
            </div> 
        </section> 
		<?php } ?>	
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