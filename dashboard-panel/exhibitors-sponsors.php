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
$result1 = mysqli_query($con,"select exhibitors_sponsors_tblstr_d from pages_tblstr_d where user='".$_SESSION['sess_member']."'");
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Exhibitors & Sponsors | Dashboard</title>

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
           <div class="section-header">
            <h1>Exhibitors & Sponsors</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Exhibitors & Sponsors</a></div>
             <!-- <div class="breadcrumb-item"> </div>-->
            </div>
          </div>
          <div class="row">
             <div class="col-12 mb-4">
              <div style="border:2px solid #3abaf4;">

    <form name="form1" action="update-exhibitors-sponsors.php" method="post">
		<textarea class="summernote" name="editor1">
				<?php
				while($row = mysqli_fetch_array($result1)){
		echo $row['exhibitors_sponsors'];
		}
		?>

		</textarea>
 

		</p>

		

		<p align="center">

			<input type="submit" class="btn btn-info" value="Submit" />

		</p>



			</form>
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
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
 
</html>