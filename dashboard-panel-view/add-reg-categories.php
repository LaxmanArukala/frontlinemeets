<?php
ob_start();
session_start();
//include("inc/cms_cn.php");
include("inc/config.php");
if(!isset($_SESSION['sess_member']))
{
	header('location:index.php');
}

        @$mem_id = @$_SESSION['sess_member']; 
		if($_GET['id']!="")
		{
			@$id = @$_GET['id'];		
			@$qrx_edus = "select *from reg_cat_tblstr_d where id='$id'";
			@$edus_rs = mysqli_query($con,$qrx_edus);
			@$edus_rw = mysqli_fetch_assoc($edus_rs);		
		}
		//-----------------				
			if(isset($_POST['add'])){		
			$reg_cat =	$_POST['reg_cat'];			
			$price =	$_POST['price'];			
			$type_of_reg_mode =	$_POST['type_of_reg_mode'];			
			$field1 =	$_POST['field1'];			
			$field2 =	$_POST['field2'];			
			$field3 =	$_POST['field3'];			
			$field4 =	$_POST['field4'];			
            mysqli_query($con,"insert into reg_cat_tblstr_d(reg_cat,price,type_of_reg_mode,field1,field2,field3,field4,user) VALUES('$reg_cat','$price','$type_of_reg_mode','$field1','$field2','$field3','$field4','".$_SESSION['sess_member']."')") or die(mysql_error());	
				
			//---------------------------------------------------								
				header("location:reg-categories.php");			
			 }	
			 				
			if(isset($_POST['edit'])){
			$reg_cat =	$_POST['reg_cat'];			
			$price =	$_POST['price'];			
			$type_of_reg_mode =	$_POST['type_of_reg_mode'];			
			$field1 =	$_POST['field1'];			
			$field2 =	$_POST['field2'];			
			$field3 =	$_POST['field3'];			
			$field4 =	$_POST['field4'];												
            mysqli_query($con,"update reg_cat_tblstr_d set reg_cat='$reg_cat',price='$price',type_of_reg_mode='$type_of_reg_mode',field1='$field1',field2='$field2',field3='$field3',field4='$field4' where id='$id'");
			//------------------File Attachment 1 ---------------		    
						
			header("location:reg-categories.php");			
			
		}		
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Add   Registration Categories | Dashboard</title>

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
            <h1>Add   Registration Categories</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Add Registration Categories</a></div>
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
                      <label for="inputName3" class="col-sm-3 col-form-label">Registration Category</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="reg_cat" class="textbox" value="<?php echo @$edus_rw['reg_cat'];?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Registration Price</label>
                      <div class="col-sm-6">
                        <textarea name="price" class="form-control"><?php echo @$edus_rw['price'];?></textarea>
                      </div>
                    </div>
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Type of Registration Mode</label>
                      <div class="col-sm-6">
                        <textarea name="type_of_reg_mode" class="form-control"><?php echo @$edus_rw['type_of_reg_mode'];?></textarea>
                      </div>
                    </div>
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Content 1</label>
                      <div class="col-sm-6">
                        <textarea name="field1" class="form-control"><?php echo @$edus_rw['field1'];?></textarea>
                      </div>
                    </div>
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Content 2</label>
                      <div class="col-sm-6">
                        <textarea name="field2" class="form-control"><?php echo @$edus_rw['field2'];?></textarea>
                      </div>
                    </div>
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Content 3</label>
                      <div class="col-sm-6">
                        <textarea name="field3" class="form-control"><?php echo @$edus_rw['field3'];?></textarea>
                      </div>
                    </div>
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Content 4</label>
                      <div class="col-sm-6">
                        <textarea name="field4" class="form-control"><?php echo @$edus_rw['field4'];?></textarea>
                      </div>
                    </div>
					   
					
                  <div align="center" class="card-footer">       
                    <?php if(@$id=="") { ?>
                    <input type="submit" name="add" value="Submit" class="btn btn-info" onclick="return Validate();"/>
                  <?php } else { ?>
                    <input type="submit" name="edit" value="Update" class="btn btn-info" onclick="return Validate();"/>
                  <?php } ?>
                  &nbsp;
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