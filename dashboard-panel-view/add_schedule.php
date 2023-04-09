<?php 
ob_start();
session_start();
include("inc/config.php");
if(!isset($_SESSION['sess_member']))
{
	header('location:index');
}
		@$mem_id = @$_SESSION['sess_member']; 
		if($_GET['schedule_id']!="")
		{
			@$schedule_id = @$_GET['schedule_id'];		
			@$qrx_edus = "select *from tbl_schedule_details_tblstr_d where id='$schedule_id'";
			@$edus_rs = mysqli_query($con,$qrx_edus);
			@$edus_rw = mysqli_fetch_assoc($edus_rs);			
		}
		include('fckeditor/fckeditor.php');

extract($_POST);
if (!empty($_FILES["personimg"]["name"])) {
 $days=$_POST['days'];
 $schedule_heading=mysqli_real_escape_string($db,$_POST['schedule_heading']);
 $title=mysqli_real_escape_string($db,$_POST['title']);
 $time=mysqli_real_escape_string($db,$_POST['time']);
 $person_name=mysqli_real_escape_string($db,$_POST['person_name']);
 $affiliation=mysqli_real_escape_string($db,$_POST['affiliation']);
 $biography=mysqli_real_escape_string($db,$_POST['biography']);
 $abstract=mysqli_real_escape_string($db,$_POST['abstract']);
 $country=mysqli_real_escape_string($db,$_POST['country']);
 $order_number=$_POST['order_number'];
 $image_name = $_FILES['personimg']['name'];
            $filename = $timestamp . basename($_FILES['personimg']['name']);
            $ext = substr($filename, strrpos($filename, '.') + 1);
            $ext = strtolower($ext);
            $split = explode(".", $image_name);
            $timestamp = rand(1, 99999);
            $image_name = $split[0] . $timestamp . "." . $ext;
            $image_name = str_replace(" ", "", $image_name);
            //echo $_FILES['personimg']['type'];
           if ($_FILES['personimg']['type'] == "image/jpeg"||$_FILES['personimg']['type'] == "image/JPEG" || $_FILES['personimg']['type'] == "image/jpg" ||$_FILES['personimg']['type'] == "image/JPG" || $_FILES['personimg']['type'] == "image/png"|| $_FILES['personimg']['type'] == "image/PNG"|| $_FILES['personimg']['type'] == "image/gif" || $_FILES['personimg']['type'] == "image/pjpeg") {
                $copytooriginal = "../uploads/personimgs/" . $image_name;
                $product_image = $image_name;
                copy($_FILES['personimg']['tmp_name'], $copytooriginal);
            } else {
                $product_image = "";
            }
			$qNewUsers = mysqli_query($con,"INSERT INTO tbl_schedule_details_tblstr_d SET days='$days', user='$mem_id', schedule_heading='$schedule_heading',title='$title',time='$time',person_name='$person_name',affiliation='$affiliation', biography='$biography', abstract='$abstract', country='$country',order_number='$order_number',personimg='$product_image',created_date=now()") or die(mysqli_error($con));			
			header("Location:add_schedule?status=success");
			exit;
		} 
		else{
 }
if(isset($_REQUEST['status'])){
	 $status=$_REQUEST['status'];
	 }
	 else
	 {
	 $status="";
	 }
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Add   Speakers | Dashboard</title>

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
   <script language="javascript">
            function validate(thisform)
            {
                 //alert('hi');
				 if (window.document.formx.days.value == "")
                {
                    alert("Please Enter Schedule Day");
                    window.document.formx.days.focus();
                    return false;
                }
                if (window.document.formx.schedule_heading.value == "")
                {
                    alert("Please Enter Schedule Heading");
                    window.document.formx.schedule_heading.focus();
                    return false;
                }
				  if (window.document.formx.title.value == "")
                {
                    alert("Please Enter Title");
                    window.document.formx.title.focus();
                    return false;
                }
				  if (window.document.formx.person_name.value == "")
                {
                    alert("Please Enter Person Name");
                    window.document.formx.person_name.focus();
                    return false;
                }
				 if (window.document.formx.affiliation.value == "")
                {
                    alert("Please Enter Affiliation");
                    window.document.formx.affiliation.focus();
                    return false;
                }
         if (window.document.formx.biography.value == "")
                {
                    alert("Please Enter Biography");
                    window.document.formx.biography.focus();
                    return false;
                }
     
				 if (window.document.formx.country.value == "")
                {
                    alert("Please Enter Country");
                    window.document.formx.country.focus();
                    return false;
                }
				  if (window.document.formx.personimg.value == "")
                {
                    alert("Please Select personimg Image");
                    window.document.formx.personimg.focus();
                    return false;
                }
                else
                {
                    return true;
                }
            }
        </script>
</head>
<body class="">
<div id="app">
    <?php include('header.php');?>
    <?php include('sidemenu.php');?>
        <!-- Main Content -->
      <div class="main-content">
        <section class="section">
           <div class="section-header">
            <h1> Schedule</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#"> Schedule</a></div>
             <!-- <div class="breadcrumb-item"> </div>-->
            </div>
          </div>
		  <div class="row">
		     <div class="col-md-6">&nbsp;
			 </div>
			 <div class="col-md-4">&nbsp;
			 </div>
             <div class="col-md-2">
			 
			 <a href="add-schedule.php"  class="prs1 btn btn-icon icon-left btn-info">
			 
			 <b> <i class="fas fa-plus"></i>Add Schedule</b></a>
			 </div>
			 </div>
			 <br>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" name="formx" id="formx" action="" onSubmit="return validate(this);" enctype="multipart/form-data">
              <div class="box-body">
			  			<?php 
				  if($status=="success"){ ?> 
                     <h4 align="center" style="color:#549128;text-align:center;font-weight:bold;"> Successfully Added Schedules</h4>
                  <?php }  if($status=="error"){?>
                     <h4 align="center" style="color:#FF0000;font-weight:bold;"> You Have Invalid Data.</h4>
                  <?php } ?>  
				   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Days <span style="color:#FF0000;">* </span></label>
                  <div class="col-sm-10">
				  <select name="days" id="days" class="form-control">
				  <option value="">-- Select Days --</option>
				   <?php
				 $query=mysqli_query($db,"select * from schedule_days_tblstr_d order by days_id ASC");
					while($data=mysqli_fetch_array($query)){
				 ?>
				   <option value="<?php echo $data['days_id'];?>"><?php echo $data['days'];?></option>
				   <?php }?>
				  </select>
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Schedule Heading <span style="color:#FF0000;">* </span></label>
                  <div class="col-sm-10">
				  <select name="schedule_heading" id="schedule_heading" class="form-control">
				  <option value="">-- Select Schedule Heading --</option>
				   <?php
				 $query1=mysqli_query($db,"select * from schedule_headings_tblstr_d order by 	schedule_heading_id ASC");
					while($data1=mysqli_fetch_array($query1)){
				 ?>
				   <option value="<?php echo $data1['schedule_heading_id'];?>"><?php echo $data1['schedule_heading'];?></option>
				   <?php }?>
				  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"> Title <span style="color:#FF0000;">* </span></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
                  </div>
                </div>
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"> Time <span style="color:#FF0000;">* </span></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="time" id="time" placeholder="Time" required>
                  </div>
                </div>
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"> Person Name <span style="color:#FF0000;">* </span></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="person_name" id="person_name" placeholder="Person Name" required>
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Affiliation <span style="color:#FF0000;">* </span></label>
                  <div class="col-sm-10">
                  <textarea type="text" class="form-control" name="affiliation" id="affiliation" placeholder="Affiliation" required></textarea>
                  </div>
                </div>
        <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Biography <span style="color:#FF0000;">* </span></label>
                  <div class="col-sm-10">
                  <textarea type="text" class="form-control" name="biography" id="biography" placeholder="Biography" required></textarea>
                  </div>
                </div>
        <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Abstract <span style="color:#FF0000;">* </span></label>
                  <div class="col-sm-10">
                  <?php
                    $FCKeditor = new FCKeditor('abstract');
                    $FCKeditor->BasePath = 'fckeditor/';
                    $FCKeditor->Value =stripslashes($data['abstract']);
                    $FCKeditor->Width = '100%';
                    $FCKeditor->Height = '450px';
                    $FCKeditor->Create();	
			   				?>  
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Country <span style="color:#FF0000;">* </span></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="country" id="country" placeholder="Country" required>
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Order Number <span style="color:#FF0000;">* </span></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="order_number" id="order_number" placeholder="Order Number" required>
                  </div>
                </div>
				 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"> personimg Image <span style="color:#FF0000;">* </span></label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="personimg" id="personimg">
					<p class="help-block" style="color:#FF0000;">Like Person</p>
                  </div>
                </div>
              </div>       
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="submit" id="submit" onClick="return validate(this);">Submit</button>
              </div>
            </form>
          <!-- /.box -->
          <!-- general form elements disabled -->
          <!-- /.box -->
        <!--/.col (right) -->
      <!-- /.row -->
    </section>
	 </div>
         
    <!-- /.content -->
 
<?php include("footer.php");?>
 </div>
<!-- jQuery 3 -->
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
