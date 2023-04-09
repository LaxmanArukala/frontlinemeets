<?php
session_start();
if(!isset($_SESSION['cname']))
{
	header('location:index.php');
}
/*if(!isset($_SESSION['uname']))
{
	header('location:index.php');
}*/
$now = time(); // Checking the time now when home page starts.
/*if ($now > $_SESSION['expire']) 
{
	session_destroy();
	echo "<script type=\"text/javascript\">window.alert('Your session is expired!');window.location.href = 'index.php';</script>";
}*/

include("inc/config.php");

?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Registrations | Dashboard</title>

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
  <script type="text/javascript" src="check/ckeditor.js"></script>
<script src="check/sample.js" type="text/javascript"></script>
<link href="check/sample.css" rel="stylesheet" type="text/css" />
</head>

<body>

  <div id="app">
    <?php include('header.php');?>
    <?php include('sidemenu.php');?>
        <!-- Main Content -->
      <div class="main-content">
        <section class="section">
           <div class="section-header">
            <h1>Registrations</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Registrations</a></div>
             <!-- <div class="breadcrumb-item"> </div>-->
            </div>
          </div>
          <div class="row">
             <div class="col-12 mb-4">
              <div class="card">
			  <div class="card-header">
                     <h4><?php echo $_SESSION['cname']; ?></h4><br>
					  <p>Number of Registrations=
					  <?php 
					  @$count_result=mysqli_query($con,"select * from tbl_registration_tblstr_d where status='1'");
					  @$count=mysqli_num_rows($count_result);
					  echo $count;
					  ?></p> 
                  </div>
			      <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
                        <tbody><tr>
                           <th>S.No</th>
							 <th>Name</th>
							 <th>Email</th>
							 <th>Phone</th>
							 <th>Country</th>
							  <th>Amount</th>
							 <!--<th>Payment Type</th>-->
							 <th> Status</th>
							 <th> Registered Date</th>
                          
                          </tr>
                        <?php 
						  $select_result=mysqli_query($con,"select * from tbl_registration_tblstr_d where status='1'");
						  if(mysqli_num_rows($select_result)>0)
						  {
						  $i=1;
						   while($rows=mysqli_fetch_assoc($select_result))
						  {
						  ?>
						<tr>
                          <td><?php echo $i; ?> </td>
                          <td><?php echo $rows['reg_title'];?> <?php echo $rows['reg_first_name'];?> <?php echo $rows['reg_second_name'];?></td>	
						  <td><?php echo $rows['reg_authors_email'];?></td>		
						  <td><?php echo $rows['reg_phone'];?></td>	
						  <td><?php echo $rows['reg_country'];?></td>	
						   <td><?php echo $rows['amt'];?></td>	
						  <!--<td><?php echo $rows['pay_gate'];?></td>	-->
						  <?php if($rows['status']=="1"){ echo "<td><div class='badge badge-success'><span class='text-white'>Success</span></div></td>"; } else { echo "<td><div class='badge badge-danger'><span class='text-white'>Failed</span></div></td>"; }  ?> 				
						   <td><?php echo $rows['reg_datetime'];?></td>
                         <!--<td><div class="badge badge-success">Active</div></td>
                          <td><a href="#" class="btn btn-secondary">Detail</a></td>-->
                        </tr>
						 <?php $i=$i+1; }  } else {  ?>
                        <tr>
						<td>
						<?php echo "No Registrations Avaliable"; ?>
						</td>
					  </tr>
					  <?php } ?>
                      </tbody>
					  </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                     
                  </div>
                </div>
				
              </div>
          </div>
         
        </section>
      </div>
      <?php include('footer.php');?>
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