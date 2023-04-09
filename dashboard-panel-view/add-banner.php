<?php
ob_start();
session_start();
include("inc/config.php");
if(!isset($_SESSION['sess_member']))
{
	header('location:index.php');
}
		@$mem_id = @$_SESSION['sess_member']; 
		//---------------------			
		$msg="";
		//-----------------
		    @$uploaddir = "../uploads/photos/";			
		//-----------------				
			if(isset($_POST['add']))
			{					
              
			    mysqli_query($con,"insert into banners_tblstr_d(user, link) values('".$_SESSION['sess_member']."', '".$_POST['link']."')") or die(mysqli_error($con));	
				$sk_id = mysqli_insert_id($con);
			//------------------File Attachment 1 ---------------		    
			$pic1name1 = $_FILES['photo']['name'];
			if($pic1name1 != "")
			{
					$pic1arr1 = explode(".",$pic1name1);
					$pic1new1 = $sk_id."-bannerspic.".$pic1arr1[count($pic1arr1)-1];
					
					if($_FILES["photo"]["type"]=="image/jpeg" || $_FILES["photo"]["type"]=="image/jpg" || $_FILES["photo"]["type"]=="image/gif"  || $_FILES["photo"]["type"]=="image/png")
            {
					move_uploaded_file($_FILES['photo']['tmp_name'], $uploaddir.$pic1new1);
					$sql="update banners_tblstr_d set image='$pic1new1' where id='$sk_id'";
					$res=mysqli_query($con,$sql) or die(mysqli_error());					
			}
			}
			chmod("photos/".$pic1new1,0777);	
			
			//---------------------------------------------------								
				header("location:banners.php");			
			//}	
			}
			
            else
				{
				$error = "Error !!, Only jpg and jpeg and gif and png image allowed";
				}
			 			
			
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Add Conference Banners | Dashboard</title>

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
            <h1>Add Conference Banners</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Add Conference Banners</a></div>
             <!-- <div class="breadcrumb-item"> </div>-->
            </div>
          </div>
		 
          <div class="row">
             <div class="col-12 mb-4">
                <div class="card">
                   <div class="card-body">
				 <form action="" method="post" enctype="multipart/form-data" name="register" id="register">
				 <?php
					if(@$msg!="")
					{ ?>
							 <div align="center"><?php echo @$msg; ?></div>
							  <?php
					} ?>
				   
                    <div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Upload Banner:</label>
                      <div class="col-sm-6">
                        <div class="custom-file">
                      <input type="file" class="custom-file-input" name="photo" id="photo" accept="image/x-png,image/gif,image/jpeg,image/jpg">
					  <span style="color:#ff0000;"><b>Note:</b> Banner size should be 1000*667</span>
                      <label class="custom-file-label" for="customFile">Choose file</label>
					 </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label"> Banner Link:</label>
                      <div class="col-sm-6">
                         <input type="text" class="form-control" name="link" id="link"> 
                      </div>
                    </div>
					
					  
                  <div align="center" class="card-footer">       
                    <input type="submit" name="add" value="Submit" class="btn btn-info" />
                   <input type="reset" name="reset" value="Reset"  class="btn btn-secondary" />
                  </div>
				  </form>
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
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
 
</html>