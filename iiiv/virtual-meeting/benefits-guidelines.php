<?php 
 include('call.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> <?php echo $row_meta['guidelines_title_bars'];?></title>
  <meta content="<?php echo $row_meta['guidelines_keywords'];?>" name='keywords'/>
  <meta content="<?php echo $row_meta['guidelines_description'];?>" name='description'/>
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
 <?php include('header-inner.php');?>
  
  <section class="bgimage">
         <div class="container-fluid">
              <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <h1>Benefits & Guidelines </h1>
                 </div>
               </div>
         </div>
       </section>
  
 <section id="cta" class="cta">
        <div class="container">

        <div class="row">
		
		 <div class="col-md-12">
          <div><?php echo $pages_row['guidelines'];?></div>
        </div>
        </div>

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
  <script>
  $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
  </script>
  

</body>
</html>