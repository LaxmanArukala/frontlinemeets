<?php
ob_start();
session_start();
include("inc/config.php");
if(!isset($_SESSION['sess_member']))
{
	header('location:index');
}
		$conf_highlights_details_result=mysqli_query($con,"select * from conf_highlights_tblstr_d where id='".$_SESSION['sess_member']."'");

	$edus_rw = mysqli_fetch_array($conf_highlights_details_result);

	if(mysqli_num_rows($conf_highlights_details_result)>0)

	{
		//---------------------			
		  if(isset($_POST['submit']))
			{	
			
			 $heading_name			=	$_POST['heading_name'];	
            $content	=	mysqli_real_escape_string($con,$_POST['content']);	 			
			$heading_two			=	$_POST['heading_two'];	
            $content_two	=	mysqli_real_escape_string($con,$_POST['content_two']);				
			$heading_three			=	$_POST['heading_three'];			
			$content_three	=	mysqli_real_escape_string($con,$_POST['content_three']);					
												
			$ins = mysqli_query($con,"update conf_highlights_tblstr_d set heading_name='$heading_name',content='$content',heading_two='$heading_two',content_two='$content_two',heading_three='$heading_three',content_three='$content_three' where id='".$_SESSION['sess_member']."'");
			//------------------File Attachment 1 ---------------		    
			if($ins)

				{

					echo mysqli_error($con);

				}

			}		

	}


	else

	{
			 	
			if(isset($_POST['submit']))
			{	
			$heading_name			=	$_POST['heading_name'];	
            $content	=	mysqli_real_escape_string($con,$_POST['content']);	 			
			$heading_two			=	$_POST['heading_two'];	
            $content_two	=	mysqli_real_escape_string($con,$_POST['content_two']);				
			$heading_three			=	$_POST['heading_three'];			
			$content_three	=	mysqli_real_escape_string($con,$_POST['content_three']);		

			    $ins = mysqli_query($con,"insert into conf_highlights_tblstr_d(id,heading_name,content,heading_two,content_two,heading_three,content_three) values('".$_SESSION['sess_member']."','$heading_name','$content','$heading_two','$content_two','$heading_three','$content_three')") or die(mysqli_error($con));	
				
			//------------------File Attachment 1 ---------------		    
			 	
			 
			if($ins)

			{

				echo mysqli_error($con);

			}

		}

		

	}
	
	$conf_highlights_details_result=mysqli_query($con,"select * from conf_highlights_tblstr_d where id='".$_SESSION['sess_member']."'");

	$edus_rw = mysqli_fetch_array($conf_highlights_details_result);

?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Add Conference Highlights | Dashboard</title>

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
            <h1>Add Conference Highlights</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Add Conference Highlights</a></div>
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
                      <label for="inputName3" class="col-sm-3 col-form-label">Heading Name:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="heading_name" value="<?php echo $edus_rw['heading_name'];?>"> 
                      </div>
                    </div>
 
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Content Description:</label>
                      <div class="col-sm-6">
                        <textarea  class="form-control" name="content" rows="6" cols="40"><?php echo @$edus_rw['content'];?></textarea>
                      </div>
                    </div>
					
					 <div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Heading Name Second:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="heading_two" value="<?php echo $edus_rw['heading_two'];?>"> 
                      </div>
                    </div>
 
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Content Description Second:</label>
                      <div class="col-sm-6">
                        <textarea  class="form-control" name="content_two" rows="6" cols="40"><?php echo @$edus_rw['content_two'];?></textarea>
                      </div>
                    </div>
					
					 <div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Heading Name Third:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="heading_three" value="<?php echo $edus_rw['heading_three'];?>"> 
                      </div>
                    </div>
 
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Content Description Third:</label>
                      <div class="col-sm-6">
                        <textarea  class="form-control" name="content_three" rows="6" cols="40"><?php echo @$edus_rw['content_three'];?></textarea>
                      </div>
                    </div>
					
					<!--<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Photo:</label>
                      <div class="col-sm-6">
                       <div class="custom-file">
                      <input type="file" class="custom-file-input" name="photo" id="photo" accept="image/x-png,image/gif,image/jpeg,image/jpg">
                      <label class="custom-file-label" for="customFile">Choose file</label>
					  <?php
						  if(@$edus_rw['photo']!="")
						  { ?>
										  <br />
										  <span style="color: red">Image should be exactly of size 300 X 200 pixels</span>
										   <br>
											<img src="photos/<?php echo @$edus_rw['photo']; ?>" border="0" width="85" height="85"/>
											<?php
						  } ?>
                    </div>
                      </div>
                    </div>-->
					
                 <div align="center" class="card-footer">       

                    <input type="submit" name="submit" value="Update" class="btn btn-info">

					<button class="btn btn-secondary" type="reset">Reset</button>

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