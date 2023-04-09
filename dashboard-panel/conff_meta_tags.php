<?php
ob_start();
session_start();
include("inc/config.php");
if(!isset($_SESSION['sess_member']))
{
	header('location:index.php');
}

	$meta_tags_result=mysqli_query($con,"select * from conff_meta_tags_tblstr_d where user='".$_SESSION['sess_member']."'");
	$row = mysqli_fetch_array($meta_tags_result);
	if(mysqli_num_rows($meta_tags_result)>0)
{
	if(isset($_POST['update']))
	{
		$keywords = mysqli_real_escape_string($con,$_POST['keywords']);
		$description = mysqli_real_escape_string($con,$_POST['description']);
		$title_bars = mysqli_real_escape_string($con,$_POST['title_bars']);
		$ab_keywords = mysqli_real_escape_string($con,$_POST['ab_keywords']);
		$ab_description = mysqli_real_escape_string($con,$_POST['ab_description']);
		$ab_title_bars = mysqli_real_escape_string($con,$_POST['ab_title_bars']);
		$reg_keywords = mysqli_real_escape_string($con,$_POST['reg_keywords']);
		$reg_description = mysqli_real_escape_string($con,$_POST['reg_description']);
		$reg_title_bars = mysqli_real_escape_string($con,$_POST['reg_title_bars']);
		$ocm_keywords = mysqli_real_escape_string($con,$_POST['ocm_keywords']);
		$ocm_description = mysqli_real_escape_string($con,$_POST['ocm_description']);
		$ocm_title_bars = mysqli_real_escape_string($con,$_POST['ocm_title_bars']);
		$speakers_keywords = mysqli_real_escape_string($con,$_POST['speakers_keywords']);
		$speakers_description = mysqli_real_escape_string($con,$_POST['speakers_description']);
		$speakers_title_bars = mysqli_real_escape_string($con,$_POST['speakers_title_bars']);
		$guidelines_keywords = mysqli_real_escape_string($con,$_POST['guidelines_keywords']);
		$guidelines_description = mysqli_real_escape_string($con,$_POST['guidelines_description']);
		$guidelines_title_bars = mysqli_real_escape_string($con,$_POST['guidelines_title_bars']);
		$program_keywords = mysqli_real_escape_string($con,$_POST['program_keywords']);
		$program_description = mysqli_real_escape_string($con,$_POST['program_description']);
		$program_title_bars = mysqli_real_escape_string($con,$_POST['program_title_bars']);
		$terms_keywords = mysqli_real_escape_string($con,$_POST['terms_keywords']);
		$terms_description = mysqli_real_escape_string($con,$_POST['terms_description']);
		$terms_title_bars = mysqli_real_escape_string($con,$_POST['terms_title_bars']);
		$insert_result = mysqli_query($con,"update `conff_meta_tags_tblstr_d` set `keywords`='$keywords',`description`='$description',`title_bars`='$title_bars',`ab_keywords`='$ab_keywords',`ab_description`='$ab_description',`ab_title_bars`='$ab_title_bars',`reg_keywords`='$reg_keywords',`reg_description`='$reg_description',`reg_title_bars`='$reg_title_bars',`ocm_keywords`='$ocm_keywords',`ocm_description`='$ocm_description',`ocm_title_bars`='$ocm_title_bars',`speakers_keywords`='$speakers_keywords',`speakers_description`='$speakers_description',`speakers_title_bars`='$speakers_title_bars',`guidelines_keywords`='$guidelines_keywords',`guidelines_description`='$guidelines_description',`guidelines_title_bars`='$guidelines_title_bars',`program_keywords`='$program_keywords',`program_description`='$program_description',`program_title_bars`='$program_title_bars',`terms_keywords`='$terms_keywords',`terms_description`='$terms_description',`terms_title_bars`='$terms_title_bars' where user='".$_SESSION['sess_member']."'") or die(mysqli_error($con));
		header('Location: conff_meta_tags.php');
		
	}
}
else 
{
	if(isset($_POST['update']))
	{
		$keywords = mysqli_real_escape_string($con,$_POST['keywords']);
		$description = mysqli_real_escape_string($con,$_POST['description']);
		$title_bars = mysqli_real_escape_string($con,$_POST['title_bars']);
		$ab_keywords = mysqli_real_escape_string($con,$_POST['ab_keywords']);
		$ab_description = mysqli_real_escape_string($con,$_POST['ab_description']);
		$ab_title_bars = mysqli_real_escape_string($con,$_POST['ab_title_bars']);
		$reg_keywords = mysqli_real_escape_string($con,$_POST['reg_keywords']);
		$reg_description = mysqli_real_escape_string($con,$_POST['reg_description']);
		$reg_title_bars = mysqli_real_escape_string($con,$_POST['reg_title_bars']);
		$ocm_keywords = mysqli_real_escape_string($con,$_POST['ocm_keywords']);
		$ocm_description = mysqli_real_escape_string($con,$_POST['ocm_description']);
		$ocm_title_bars = mysqli_real_escape_string($con,$_POST['ocm_title_bars']);
		$speakers_keywords = mysqli_real_escape_string($con,$_POST['speakers_keywords']);
		$speakers_description = mysqli_real_escape_string($con,$_POST['speakers_description']);
		$speakers_title_bars = mysqli_real_escape_string($con,$_POST['speakers_title_bars']);
		$guidelines_keywords = mysqli_real_escape_string($con,$_POST['guidelines_keywords']);
		$guidelines_description = mysqli_real_escape_string($con,$_POST['guidelines_description']);
		$guidelines_title_bars = mysqli_real_escape_string($con,$_POST['guidelines_title_bars']);
		$program_keywords = mysqli_real_escape_string($con,$_POST['program_keywords']);
		$program_description = mysqli_real_escape_string($con,$_POST['program_description']);
		$program_title_bars = mysqli_real_escape_string($con,$_POST['program_title_bars']);
		$terms_keywords = mysqli_real_escape_string($con,$_POST['terms_keywords']);
		$terms_description = mysqli_real_escape_string($con,$_POST['terms_description']);
		$terms_title_bars = mysqli_real_escape_string($con,$_POST['terms_title_bars']);
		$insert_result=mysqli_query($con,"insert into `conff_meta_tags_tblstr_d`(`keywords`,`description`,`title_bars`,`ab_keywords`,`ab_description`,`ab_title_bars`,`reg_keywords`,`reg_description`,`reg_title_bars`,`ocm_keywords`,`ocm_description`,`ocm_title_bars`,`speakers_keywords`,`speakers_description`,`speakers_title_bars`,`guidelines_keywords`,`guidelines_description`,`guidelines_title_bars`,`program_keywords`,`program_description`,`program_title_bars`,`terms_keywords`,`terms_description`,`terms_title_bars`,`user`) values('$keywords','$description','$title_bars','$ab_keywords','$ab_description','$ab_title_bars','$reg_keywords','$reg_description','$reg_title_bars','$ocm_keywords','$ocm_description','$ocm_title_bars','$speakers_keywords','$speakers_description','$speakers_title_bars','$guidelines_keywords','$guidelines_description','$guidelines_title_bars','$program_keywords','$program_description','$program_title_bars','$terms_keywords','$terms_description','$terms_title_bars','".$_SESSION['sess_member']."')") or die(mysqli_error($con));
		header('Location: conff_meta_tags.php');
		
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Meta Tags | Dashboard</title>

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
            <h1>Meta Tags</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Meta Tags</a></div>
             <!-- <div class="breadcrumb-item"> </div>-->
            </div>
          </div>
		 <?php
		$meta_tags_result=mysqli_query($con,"select * from conff_meta_tags_tblstr_d where user='".$_SESSION['sess_member']."'");
		$row = mysqli_fetch_array($meta_tags_result);
	?>
          <div class="row">
             <div class="col-12 mb-4">
                <div class="card">
                   <div class="card-body">
				  <form method="post" action="#"> 
         			<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Home Page Keywords</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="keywords" style="height: 100px !important;"><?php echo $row['keywords'];?></textarea>
						<span style="color:red">Home Page Section Note: Each keyword seperated by "<strong>,</strong>" and Keywords should be upto 80 words.</span>
                      </div>
                    </div>
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Home Page Description</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="description" style="height: 100px !important;"><?php echo $row['description'];?></textarea>
						<span style="color:red">Home Page Section Note: Description should be upto 160 characters.</span>
                      </div>
                    </div>
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Home Page Title Bars</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="title_bars" style="height: 100px !important;"><?php echo $row['title_bars'];?></textarea>
						<span style="color:red">Home Page Section Note: Title Bars should be upto 160 characters.</span>
                      </div>
                    </div>
					
					
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Abstract Submission Keywords</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="ab_keywords" style="height: 100px !important;"><?php echo stripslashes($row['ab_keywords']) ?></textarea>
						<span style="color:red">Abstract Submission Page Section Note: Each keyword seperated by "<strong>,</strong>" and Keywords should be upto 80 words.</span>
                      </div>
                    </div>
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Abstract Submission Description</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="ab_description" style="height: 100px !important;"><?php echo stripslashes($row['ab_description']) ?></textarea>
						<span style="color:red">Abstract Submission Page Section Note: Description should be upto 160 characters.</span>
                      </div>
                    </div>
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Abstract Submission Title Bars</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="ab_title_bars" style="height: 100px !important;"><?php echo stripslashes($row['ab_title_bars']) ?></textarea>
						<span style="color:red">Abstract Submission Page Section Note: Title Bars should be upto 160 characters.</span>
                      </div>
                    </div>
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Registration Keywords</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="reg_keywords" style="height: 100px !important;"><?php echo stripslashes($row['reg_keywords']) ?></textarea>
						<span style="color:red">Registration Page Section Note: Each keyword seperated by "<strong>,</strong>" and Keywords should be upto 80 words.</span>
                      </div>
                    </div>
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Registration Description</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="reg_description" style="height: 100px !important;"><?php echo stripslashes($row['reg_description']) ?></textarea>
						<span style="color:red">Registration Page Section Note: Description should be upto 160 characters.</span>
                      </div>
                    </div>
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Registration Title Bars</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="reg_title_bars" style="height: 100px !important;"><?php echo stripslashes($row['reg_title_bars']) ?></textarea>
						<span style="color:red">Registration Page Section Note: Title Bars should be upto 160 characters.</span>
                      </div>
                    </div>
					
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Speakers Keywords</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="speakers_keywords" style="height: 100px !important;"><?php echo stripslashes($row['speakers_keywords']) ?></textarea>
						<span style="color:red">Speakers Page Section Note: Each keyword seperated by "<strong>,</strong>" and Keywords should be upto 80 words.</span>
                      </div>
                    </div>
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Speakers Description</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="speakers_description" style="height: 100px !important;"><?php echo stripslashes($row['speakers_description']) ?></textarea>
						<span style="color:red">Speakers Page Section Note: Description should be upto 160 characters.</span>
                      </div>
                    </div>
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Speakers Title Bars</label>
                      <div class="col-sm-6">
                        <textarea class="form-control"  name="speakers_title_bars" style="height: 100px !important;"><?php echo stripslashes($row['speakers_title_bars']) ?></textarea>
						<span style="color:red">Speakers Page Section Note: Title Bars should be upto 160 characters.</span>
                      </div>
                    </div>
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Guidelines & FAQS Keywords</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="guidelines_keywords" style="height: 100px !important;"><?php echo stripslashes($row['guidelines_keywords']) ?></textarea>
						<span style="color:red">Guidelines & FAQS Page Section Note: Each keyword seperated by "<strong>,</strong>" and Keywords should be upto 80 words.</span>
                      </div>
                    </div>
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Guidelines & FAQS Description</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="guidelines_description" style="height: 100px !important;"><?php echo stripslashes($row['guidelines_description']) ?></textarea>
						<span style="color:red">Guidelines & FAQS Page Section Note: Description should be upto 160 characters.</span>
                      </div>
                    </div>
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Guidelines & FAQS Title Bars</label>
                      <div class="col-sm-6">
                        <textarea class="form-control"  name="guidelines_title_bars" style="height: 100px !important;"><?php echo stripslashes($row['guidelines_title_bars']) ?></textarea>
						<span style="color:red">Guidelines & FAQS Page Section Note: Title Bars should be upto 160 characters.</span>
                      </div>
                    </div>
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Terms & Conditions Keywords</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="terms_keywords" style="height: 100px !important;"><?php echo stripslashes($row['terms_keywords']) ?></textarea>
						<span style="color:red">Terms & Conditions Page Section Note: Each keyword seperated by "<strong>,</strong>" and Keywords should be upto 80 words.</span>
                      </div>
                    </div>
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Terms & Conditions Description</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="terms_description" style="height: 100px !important;"><?php echo stripslashes($row['terms_description']) ?></textarea>
						<span style="color:red">Terms & Conditions Page Section Note: Description should be upto 160 characters.</span>
                      </div>
                    </div>
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Terms & Conditions Title Bars</label>
                      <div class="col-sm-6">
                        <textarea class="form-control"  name="terms_title_bars" style="height: 100px !important;"><?php echo stripslashes($row['terms_title_bars']) ?></textarea>
						<span style="color:red">Terms & Conditions Page Section Note: Title Bars should be upto 160 characters.</span>
                      </div>
                    </div>
					
					
                  <div align="center" class="card-footer">       
                    <input type="submit"  name="update" value="Update" class="btn btn-info"/>
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