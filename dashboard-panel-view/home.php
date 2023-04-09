<?php
session_start();
//$_SESSION['sess_member']=$_GET['id'];
//$_SESSION['cname']=$_GET['cname'];
$_SESSION['start'] = time(); // Taking now logged in time.
$_SESSION['expire'] = $_SESSION['start'] + (60 * 60);//ending tome of 1hr
include("inc/config.php");
if(!isset($_SESSION['cname']))
{
	header('location:index.php');
}
$q1_csp = "select day,date,sid from scientific_programme_tblstr_d where user='".$_SESSION['sess_member']."' and day='1' order by day ASC";
$csp_rs = mysqli_query($con,$q1_csp); 
				 
         while($row_q1 = mysqli_fetch_assoc($csp_rs))
		 {
			$_SESSION['day1date']= $row_q1['date'];
			$_SESSION['day1sid']= $row_q1['sid'];
					
		 }
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /> 
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
</head>

<body>
  <div id="app">
    <?php include('header.php');?>
    <?php include('sidemenu.php');?>
        <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                 <i class="fas fa-money-check"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4 class="clr">Total Registrations</h4>
                  </div>
                  <div class="card-body">
                    <?php 
					  @$count_result=mysqli_query($con,"select * from tbl_registration_tblstr_d where status='1' and user='".$_SESSION['cname']."'");
					  @$count=mysqli_num_rows($count_result);
					  echo $count;
					  ?></p> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
               <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-file-invoice"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4 class="clr">Total Abstracts</h4>
                  </div>
                  <div class="card-body">
                   <?php 
					  @$count_result=mysqli_query($con,"select * from abstracts_tblstr_d where `user`='".$_SESSION['cname']."' order by aid desc");
					  @$count=mysqli_num_rows($count_result);
					  echo $count;
					  ?>
                  </div>
                </div>
              </div>
            </div>
            <!--<div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                  <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-file-download"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4 class="clr">Brochure Downloads</h4>
                  </div>
                  <div class="card-body">
                    45
                  </div>
                </div>
              </div>
            </div>-->
          </div>
          <div class="row">
             <div class="col-12 mb-4">
                <div class="hero text-white hero-bg-image hero-bg-parallax" style="background-image: url('assets/img/unsplash/andre-benz-1214056-unsplash.jpg');">
                  <div class="hero-inner">
                    <h2>Welcome <? echo $_SESSION['cname']."<br>"; ?></h2>
                    <?php
                    	$important_details_result = mysqli_query($con,"select * from important_details_tblstr_d where id='".$_SESSION['sess_member']."'");
	$row = mysqli_fetch_array($important_details_result);
	if (strpos($row['ConferenceTitle'], '<br>') == true) 
	{
		$title = explode("<br>", $row['ConferenceTitle']);
	}
                ?>    
                    <p class="lead"><?php echo $title[0];?> <?php echo $title[1]; ?></p>
                    <p class="lead"><strong>Conference Dates : </strong><?php echo $row['ConferenceDates'];?></p>
                    <p class="lead"><strong>Conference Venue : </strong> <?php echo $row['ConferenceVenue'];?></p>
                    <!--<div class="mt-4">
                      <a href="<?php echo $row['ConfUrl'];?>" target="_blank" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="fas fa-globe"></i> View Website</a>
                    </div>-->
                  </div>
                </div>
              </div>
          </div>
          
        </section>
      </div>
	  
      <?php include('footer.php');?>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="assets/modules/jquery.sparkline.min.js"></script>
  <script src="assets/modules/chart.min.js"></script>
  <script src="assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
  <script src="assets/modules/summernote/summernote-bs4.js"></script>
  <script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Page Specific JS File -->
  <!--<script src="assets/js/page/index.js"></script>-->
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
  
   
</body>
 
</html>