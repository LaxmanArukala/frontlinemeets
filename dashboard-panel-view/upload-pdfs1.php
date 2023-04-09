<?php
ob_start();
session_start();
include("inc/config.php");
if(!isset($_SESSION['sess_member']))
{
	header('location:index.php');
}
$id=$_SESSION['sess_member'];
$r=mysqli_query($con,"select * from pdfs where id='$id'");
$f=mysqli_fetch_array($r);

if(isset($_POST['Submit']))
{
	
				$tentative_program= $_FILES['tentative_program']['name'];
				
				$brochure=$_FILES['brochure']['name'];
				$conferenceguide=$_FILES['conferenceguide']['name'];
				$eform_usa=$_FILES['eform_usa']['name'];
				$sponsorship=$_FILES['sponsorship']['name'];
				
//===================
            $add_res=mysqli_query($con,"INSERT INTO `pdfs` (`tentative_program` ,`Brochure` ,`id`) VALUES ('$tentative_program','$brochure','$id')");
            //$add_res=mysqli_query($con,"INSERT INTO `conference_cms`.`pdfs` (`Conferenceguide` ,`Brochure` ,`Sponsorship` ,`id`)VALUES ('$conferenceguide', '$brochure', '$sponsorship', '$id')");
			//------------------File Attachment ----------------
			
			$uploaddir = "pdfs/";
			$pic1name1 = $_FILES['tentative_program']['name'];
			if($pic1name1 != "")
			{
					$pic1arr1 = explode(".",$pic1name1);
					$pic1new1 = $_SESSION['cname']."-tentative-program.pdf";
					move_uploaded_file($_FILES['tentative_program']['tmp_name'], $uploaddir.$pic1new1);
					$sqlqq="update pdfs set tentative_program='$pic1new1' where id='$id'";
					$resqq=mysqli_query($con,$sqlqq) or die(mysqli_error());					
			}
			
			$pic1name2 = $_FILES['brochure']['name'];
			if($pic1name2 != "")
			{
					$pic1arr2 = explode(".",$pic1name2);
					$pic1new2 = $_SESSION['cname']."-brochure.pdf";
					move_uploaded_file($_FILES['brochure']['tmp_name'], $uploaddir.$pic1new2);
					$sqlqq="update pdfs set Brochure='$pic1new2' where id='$id'";
					$resqq=mysqli_query($con,$sqlqq) or die(mysqli_error());					
			}
			
			$pic1name3 = $_FILES['conferenceguide']['name'];
			if($pic1name3 != "")
			{
					$pic1arr3 = explode(".",$pic1name3);
					$pic1new3 = $id."_Conferenceguide.pdf";
					move_uploaded_file($_FILES['conferenceguide']['tmp_name'], $uploaddir.$pic1new3);
					$sqlqq="update pdfs set Conferenceguide='$pic1new3' where id='$id'";
					$resqq=mysqli_query($con,$sqlqq) or die(mysqli_error());					
			}
			$pic1name4 = $_FILES['eform_usa']['name'];
			if($pic1name4 != "")
			{
					$pic1arr4 = explode(".",$pic1name4);
					$pic1new4 = $id."_eform_usa.pdf";
					move_uploaded_file($_FILES['eform_usa']['tmp_name'], $uploaddir.$pic1new4);
					$sqlqq="update pdfs set eform_usa='$pic1new4' where id='$id'";
					$resqq=mysqli_query($con,$sqlqq) or die(mysqli_error());					
			}
			$pic1name5 = $_FILES['sponsorship']['name'];
			if($pic1name5 != "")
			{
					$pic1arr5 = explode(".",$pic1name5);
					$pic1new5 = $id."-".$_SESSION['cname']."_Sponsorship.pdf";
					move_uploaded_file($_FILES['sponsorship']['tmp_name'], $uploaddir.$pic1new5);
					$sqlqq="update pdfs set Sponsorship='$pic1new5' where id='$id'";
					$resqq=mysqli_query($con,$sqlqq) or die(mysqli_error());					
			}
			$pic1name6 = $_FILES['program']['name'];
			if($pic1name6 != "")
			{
					$pic1arr6 = explode(".",$pic1name6);
					$pic1new6 = $id."_program.pdf";
					move_uploaded_file($_FILES['program']['tmp_name'], $uploaddir.$pic1new6);
					$sqlqq="update pdfs set program='$pic1new6' where id='$id'";
					$resqq=mysqli_query($con,$sqlqq) or die(mysqli_error());					
			}
			chmod("pdfs/".$pic1new1,0777);
			chmod("pdfs/".$pic1new2,0777);
			chmod("pdfs/".$pic1new3,0777);
			chmod("pdfs/".$pic1new4,0777);
			chmod("pdfs/".$pic1new5,0777);
			chmod("pdfs/".$pic1new6,0777);
		
			//-----------------------------------
    
header("location:upload-pdfs.php");
 

}
//<!--==========================================================update=====================================-->
if(isset($_POST['update']))
{
	
			    $tentative_program= $_FILES['tentative_program']['name'];
				
				$brochure=$_FILES['brochure']['name'];
				$conferenceguide=$_FILES['conferenceguide']['name'];
				$eform_usa=$_FILES['eform_usa']['name'];
				$sponsorship=$_FILES['sponsorship']['name'];
//===================

			//------------------File Attachment ----------------
			
			
			$uploaddir = "pdfs/";
			$pic1name1 = $_FILES['tentative_program']['name'];
			if($pic1name1 != "")
			{
					$pic1arr1 = explode(".",$pic1name1);
					$pic1new1 = $_SESSION['cname']."-tentative-program.pdf";
					move_uploaded_file($_FILES['tentative_program']['tmp_name'], $uploaddir.$pic1new1);
					$sqlqq="update pdfs set tentative_program='$pic1new1' where id='$id'";
					$resqq=mysqli_query($con,$sqlqq) or die(mysqli_error());					
			}
			
			$pic1name2 = $_FILES['brochure']['name'];
			if($pic1name2 != "")
			{
					$pic1arr2 = explode(".",$pic1name2);
					$pic1new2 = $_SESSION['cname']."-brochure.pdf";
					move_uploaded_file($_FILES['brochure']['tmp_name'], $uploaddir.$pic1new2);
					$sqlqq="update pdfs set Brochure='$pic1new2' where id='$id'";
					$resqq=mysqli_query($con,$sqlqq) or die(mysqli_error());					
			}
			
			$pic1name3 = $_FILES['conferenceguide']['name'];
			if($pic1name3 != "")
			{
					$pic1arr3 = explode(".",$pic1name3);
					@$pic1new3 = $id."_Conferenceguide.pdf";
					move_uploaded_file($_FILES['conferenceguide']['tmp_name'], $uploaddir.$pic1new3);
					@$sqlqq="update pdfs set Conferenceguide='$pic1new3' where id='$id'";
					@$resqq=mysqli_query($con,$sqlqq) or die(mysqli_error());					
			}
			$pic1name4 = $_FILES['eform_usa']['name'];
			if($pic1name4 != "")
			{
					$pic1arr4 = explode(".",$pic1name4);
					$pic1new4 = $id."_eform_usa.pdf";
					move_uploaded_file($_FILES['eform_usa']['tmp_name'], $uploaddir.$pic1new4);
					$sqlqq="update pdfs set eform_usa='$pic1new4' where id='$id'";
					$resqq=mysqli_query($con,$sqlqq) or die(mysqli_error());					
			}
			$pic1name5 = $_FILES['sponsorship']['name'];
			if($pic1name5 != "")
			{
					$pic1arr5 = explode(".",$pic1name5);
					$pic1new5 = $id."-".$_SESSION['cname']."_Sponsorship.pdf";
					move_uploaded_file($_FILES['sponsorship']['tmp_name'], $uploaddir.$pic1new5);
					$sqlqq="update pdfs set Sponsorship='$pic1new5' where id='$id'";
					$resqq=mysqli_query($con,$sqlqq) or die(mysqli_error());					
			}
			$pic1name6 = $_FILES['program']['name'];
			if($pic1name6 != "")
			{
					$pic1arr6 = explode(".",$pic1name6);
					@$pic1new6 = $id."-".$_SESSION['cname']."_program.pdf";
					move_uploaded_file($_FILES['program']['tmp_name'], $uploaddir.$pic1new6);
					@$sqlqq="update pdfs set program='$pic1new6' where id='$id'";
					@$resqq=mysqli_query($con,$sqlqq) or die(mysqli_error());					
			}
			chmod("pdfs/".$pic1new1,0777);
			chmod("pdfs/".$pic1new2,0777);
			chmod("pdfs/".$pic1new3,0777);
			chmod("pdfs/".$pic1new4,0777);
			chmod("pdfs/".$pic1new5,0777);
			chmod("pdfs/".$pic1new6,0777);
			//-----------------------------------
    
header("location:upload-pdfs.php");
 

}
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Upload Pdf's | Dashboard</title>

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
            <h1>Upload Pdf's</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Upload Pdf's</a></div>
             <!-- <div class="breadcrumb-item"> </div>-->
            </div>
          </div>
		 
          <div class="row">
             <div class="col-12 mb-4">
                <div class="card">
                   <div class="card-body">
				  <?php
			 if(!isset($_POST['Submit']))
			  {
				  ?>
              <form id="register" name="edit" action="upload-pdfs.php" method="post" enctype="multipart/form-data">
				   
				   <div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Conference Brochure  (PDF)</label>
                      <div class="col-sm-6">
					  <?php if(!$f['Brochure'] == "" || !$f['Brochure'] == null ){
						  echo "<a href='pdfs/".$f['Brochure']."' target='_blank'>".$f['Brochure']."</a>";
					  } ?>
                       <div class="custom-file">
					  <input type="file" class="custom-file-input" name="brochure" value="<?php echo $f['Brochure']; ?>" accept="application/pdf">
                      <label class="custom-file-label" for="customFile">Choose file</label>
					  </div>
                      </div>
                    </div>
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Tentative Program (PDF)</label>
                      <div class="col-sm-6">
					  <?php if(!$f['tentative_program'] == "" || !$f['tentative_program'] == null ){
						  echo "<a href='pdfs/".$f['tentative_program']."' target='_blank'>".$f['tentative_program']."</a>";
					  } ?>
                       <div class="custom-file">
					   <input type="file" class="custom-file-input" name="tentative_program" value="<?php echo $f['tentative_program']; ?>" accept="application/pdf">
                      <label class="custom-file-label" for="customFile">Choose file</label>
					  </div>
                      </div>
                    </div>
				 
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Meeting Agenda (PDF)</label>
                      <div class="col-sm-6">
					   <?php if(!$f['meeting_agenda'] == "" || !$f['meeting_agenda'] == null ){
						  echo "<a href='pdfs/".$f['meeting_agenda']."' target='_blank'>".$f['meeting_agenda']."</a>";
					  } ?>
                       <div class="custom-file">
					 <input type="file" class="custom-file-input" name="meeting_agenda" value="<?php echo $f['meeting_agenda']; ?>"  accept="application/pdf"/> 
                      <label class="custom-file-label" for="customFile">Choose file</label>
					  </div>
                      </div>
                    </div>
					
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Exhibitors Sponsors PDF</label>
                      <div class="col-sm-6">
					   <?php if(!$f['eform_usa'] == "" || !$f['eform_usa'] == null ){
						  echo "<a href='pdfs/".$f['eform_usa']."' target='_blank'>".$f['eform_usa']."</a>";
					  } ?>
                       <div class="custom-file">
					  <input type="file" class="custom-file-input" name="eform_usa" value="<?php echo $f['eform_usa']; ?>"  accept="application/pdf"/>
                      <label class="custom-file-label" for="customFile">Choose file</label>
					  </div>
                      </div>
                    </div>
					 
					
                  <div align="center" class="card-footer">       
                    <?php if($f['Brochure'] == "" || $f['Brochure'] == null ){?><input type="submit" name="Submit" value="Submit" class="button" onClick="return validate();"><?php } else {?>&nbsp;&nbsp;<input type="submit" name="update" value="Update" class="button btn btn-info"><?php } ?>
                  </div>
				  </form>
				   <?php } ?>   
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