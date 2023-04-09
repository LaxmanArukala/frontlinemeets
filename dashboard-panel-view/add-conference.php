<?php
ob_start();
session_start();
include("inc/config.php");
if($_SESSION['cname']!='admin')
{
	header('location:index.php');
}

if($_GET['id']!="")
{
	$result = mysqli_query($con,"select * from login_details_tblstr_d where id='".$_GET['id']."'");
	$row = mysqli_fetch_array($result);
}

if(isset($_POST['add']))
{
	$ins = mysqli_query($con,"insert into login_details_tblstr_d(password,username,ConfName) values('".$_POST['password']."','".$_POST['user_name']."','".$_POST['short_name']."')") or die(mysqli_error());	
	$sk_id = mysqli_insert_id($con);
	$ins = mysqli_query($con,"insert into important_details_tblstr_d(id) values('$sk_id')") or die(mysqli_error());
	if($ins)
	{
		header('location:register.php');
	}
}

if(isset($_POST['edit']))
{
	$update = mysqli_query($con,"update login_details_tblstr_d SET password='".$_POST['password']."', username='".$_POST['user_name']."',ConfName='".$_POST['short_name']."' where id='".$_GET['id']."'") or die(mysqli_error());	
	if($update)
	{
		header('location:register.php');
	}
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
            <div class="col-12">
                
                <div class="card">
                   <div class="card-body">
                    <div class="table-responsive">
                      <div id="table-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
					  <div class="row">
					  <div class="col-sm-12 col-md-6">
					  <div class="dataTables_length" id="table-1_length">
					  <label>Show <select name="table-1_length" aria-controls="table-1" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="table-1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="table-1"></label></div></div></div>
					  <div class="row">
					   
					   <a href="add-conference.php" style="text-decoration:underline; font-family:Verdana, Geneva, sans-serif; font-size:15px; color:#060"><strong>ADD CONFERENCE</strong></a>
					   <a href="logout.php" style="text-decoration:underline; font-family:Verdana, Geneva, sans-serif; font-size:16px; color:#060"><strong>LOGOUT</strong></a>
					   
					    
					  <div class="col-sm-12">
					  
					  <form action="" method="post" enctype="multipart/form-data" name="register" id="register">
         
				   <?php
					if(@$msg!="")
					{ ?>
							 <div align="center"><?php echo @$msg; ?></div>
							  <?php
					} ?>
				   
                    <div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Conference Short Name:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="short_name" class="textbox" value="<?=$row['ConfName']?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Desired User Name:</label>
                      <div class="col-sm-6">
                        <input type="text"  class="form-control" name="user_name" class="textbox" value="<?=$row['username']?>">
                      </div>
                    </div>
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Desired Password:</label>
                      <div class="col-sm-6">
                        <input type="text"  class="form-control" name="password" class="textbox" value="<?=$row['password']?>">
                      </div>
                    </div>
					 
                  <div align="center" class="card-footer">       
                    <?php if($_GET['id']=="") { ?>
                    <input type="submit" name="add" value="Submit" class="btn btn-info" onclick="return Validate();"/>
                  <?php } else { ?>
                    <input type="submit" name="edit" value="Update" class="btn btn-info" onclick="return Validate();"/>
                  <?php } ?>
                  &nbsp;
                  <input type="reset" name="reset" value="Reset"  class="btn btn-secondary" />
                  </div>
				  </form>
					  
					  
					   </div></div> </div>
                    </div>
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
  <script src="assets/js/page/index.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
  
   
</body>
 
</html>