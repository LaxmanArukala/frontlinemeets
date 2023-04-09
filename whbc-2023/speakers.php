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
    <link rel="stylesheet" href="css/sper.css">
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
                            <h3>Speakers</h3>
                            <ul class="breadcrumb">
                                <li><a href="javascript:void(0)">Speakers</a></li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
    <section class="section gb">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="tab" href="#ps">Pleanary Speakers</a></li>
              <li><a data-toggle="tab" href="#is">Invited Speakers </a></li> 
                <li><a data-toggle="tab" href="#ks">Keynote Speakers</a></li> 
                <li><a data-toggle="tab" href="#fs">Featured Speakers</a></li> 
            </ul>

            <div class="tab-content">
                <div id="ps" class="tab-pane fade in active">
                  <!-- Looping start -->
                   <?php                  
                    include("config/config.php"); 
                    include("functions.php");	
                    $query  = "SELECT * FROM plenary_speakers_tblstr_d WHERE user='$id' ORDER BY recordListingID ASC";
                    $result = mysqli_query($conn1,$query);	
                    if(mysqli_num_rows($result)>0)		
                      {								
                    
                    ?>	
                    
                      <section class="section gb">
                          <div class="container">
                            <div class="row">
                                <?php
                              while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))	
                                  {	
                                  if($row['photo']!="")	
                                  {							
                                $img_pth = "https://agmeets.org/uploads/speakers/".$row['photo'];	
                                }			
                                
                                          
                                ?> 
                              <div class="col-md-3">
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
                              <?php } ?>	

                                  
                            </div> 
                            <hr class="invis">   
                        </div> 
                      </section> 
                      <?php } ?>	
                    <!-- Looping ENd -->
                </div>
                <div id="is" class="tab-pane fade">
                   <!-- Looping start -->
                   <?php                  
                    include("config/config.php"); 
                    include("functions.php");	
                    $query  = "SELECT * FROM invited_speakers_tblstr_d WHERE user='$id' ORDER BY recordListingID ASC";
                    $result = mysqli_query($conn1,$query);	
                    if(mysqli_num_rows($result)>0)		
                      {								
                    
                    ?>	
                    
                      <section class="section gb">
                          <div class="container">
                            <div class="row">
                                <?php
                              while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))	
                                  {	
                                  if($row['photo']!="")	
                                  {							
                                $img_pth = "https://agmeets.org/uploads/speakers/".$row['photo'];	
                                }			
                                
                                          
                                ?> 
                              <div class="col-md-3">
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
                              <?php } ?>	

                                  
                            </div> 
                            <hr class="invis">   
                        </div> 
                      </section> 
                      <?php } ?>	
                    <!-- Looping ENd --> 
                </div> 
                <div id="ks" class="tab-pane fade">
                   <!-- Looping start -->
                   <?php                  
                    include("config/config.php"); 
                    include("functions.php");	
                    $query  = "SELECT * FROM keynote_speakers_tblstr_d WHERE user='$id' ORDER BY recordListingID ASC";
                    $result = mysqli_query($conn1,$query);	
                    if(mysqli_num_rows($result)>0)		
                      {								
                    
                    ?>	
                    
                      <section class="section gb">
                          <div class="container">
                            <div class="row">
                                <?php
                              while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))	
                                  {	
                                  if($row['photo']!="")	
                                  {							
                                $img_pth = "https://agmeets.org/uploads/speakers/".$row['photo'];	
                                }			
                                
                                          
                                ?> 
                              <div class="col-md-3">
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
                              <?php } ?>	

                                  
                            </div> 
                            <hr class="invis">   
                        </div> 
                      </section> 
                      <?php } ?>	
                    <!-- Looping ENd --> 
                </div> 
                <div id="fs" class="tab-pane fade">
                  <!-- Looping start -->
                  <?php                  
                    include("config/config.php"); 
                    include("functions.php");	
                    $query  = "SELECT * FROM featured_speakers_tblstr_d WHERE user='$id' ORDER BY recordListingID ASC";
                    $result = mysqli_query($conn1,$query);	
                    if(mysqli_num_rows($result)>0)		
                      {								
                    
                    ?>	
                    
                      <section class="section gb">
                          <div class="container">
                            <div class="row">
                                <?php
                              while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))	
                                  {	
                                  if($row['photo']!="")	
                                  {							
                                $img_pth = "https://agmeets.org/uploads/speakers/".$row['photo'];	
                                }			
                                
                                          
                                ?> 
                              <div class="col-md-3">
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
                              <?php } ?>	

                                  
                            </div> 
                            <hr class="invis">   
                        </div> 
                      </section> 
                      <?php } ?>	
                    <!-- Looping ENd -->   
                </div> 
            </div> 
          </div>
        </div>
      </div>
    </section>
 
    <?php include('footer.php');?>

    <!-- jQuery Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
     
   </body>
</html>