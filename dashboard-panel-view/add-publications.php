<?php
ob_start();
session_start();
include("inc/config.php");
if(!isset($_SESSION['sess_member']))
{
	header('location:index.php');
}
		@$mem_id = @$_SESSION['sess_member']; 
		if($_GET['id']!="")
		{
			@$id = @$_GET['id'];		
			@$qrx_edus = "select *from pub_opp_tblstr_d where id='$id'";
			@$edus_rs = mysqli_query($con,$qrx_edus);
			@$edus_rw = mysqli_fetch_assoc($edus_rs);			
		}
		//---------------------			
		$msg="";
		//-----------------
		    @$uploaddir = "../uploads/publication-opportunities/";			
		//-----------------				
			if(isset($_POST['add']))
			{
			    
			@$name			=	$_POST['name'];			
			@$field1	=	mysqli_real_escape_string($con,$_POST['field1']);				
			@$field2 	=   mysqli_real_escape_string($con,$_POST['field2']);
			@$field3 		= $_POST['field3'];	
			@$network		= $_POST['network'];		
						
			/*@$ck_ext = mysql_query("select name,conference from committee where name='$name' and user='$mem_id'");	
			if(mysql_num_rows($ck_ext)>0)
			{
				@$msg = "<font color='red'>Name Already Exist !</font>";
			}
			else
			{*/						
			    mysqli_query($con,"insert into pub_opp_tblstr_d(name,field1,user,field2,field3,network) values('$name','$field1','$mem_id','$field2','$field3','$network')") or die(mysqli_error());	
				$sk_id = mysqli_insert_id($con);
			//------------------File Attachment 1 ---------------		    
			@$pic1name1 = $_FILES['photo']['name'];
			if($pic1name1 != "")
			{
					$pic1arr1 = explode(".",$pic1name1);
					//$pic1arr1 = 'pic';
					$pic1new1 ="publication-$sk_id." .$pic1arr1[count($pic1arr1)-1];
					
					if($_FILES["photo"]["type"]=="image/jpeg" || $_FILES["photo"]["type"]=="image/jpg" || $_FILES["photo"]["type"]=="image/gif"  || $_FILES["photo"]["type"]=="image/png")
						{
					
					move_uploaded_file($_FILES['photo']['tmp_name'], $uploaddir.$pic1new1);
					$sql="update pub_opp_tblstr_d set photo='$pic1new1' where id='$sk_id'";
					$res=mysqli_query($con,$sql) or die(mysqli_error());					
			}
			}
			chmod("../uploads/publication-opportunities/".$pic1new1,0777);	
			
			//---------------------------------------------------								
				header("location:publications.php");			
			//}	
			 	}
			else
				{
				$error = "Error !!, Only jpg and jpeg and gif and png image allowed";
				}
		 			
			if(isset($_POST['edit']))
			{	
			    
			@$name			=	$_POST['name'];			
			@$field1	=	mysqli_real_escape_string($con,$_POST['field1']);				
			@$field2 	=   mysqli_real_escape_string($con,$_POST['field2']);
			@$field3 		= $_POST['field3'];	
			 @$network		= $_POST['network'];
												
			mysqli_query($con,"update pub_opp_tblstr_d set name='$name',field1='$field1',field2='$field2',field3='$field3',network='$network' where id='$id'");	
			//------------------File Attachment 1 ---------------		    
			@$pic1name1 = $_FILES['photo']['name'];
			if($pic1name1 != "")
			{
					//$pic1arr1 = explode(".",$pic1name1);
					$pic1arr1 = explode(".",$pic1name1);
					//$pic1arr1 = 'pic';
				 @$pic1new1 = "publication-$id." .$pic1arr1[count($pic1arr1)-1];
					//@$pic1new1 = "journals-@$sk_id".$pic1arr1[count($pic1arr1)-1];
					
					if($_FILES["photo"]["type"]=="image/jpeg" || $_FILES["photo"]["type"]=="image/jpg" || $_FILES["photo"]["type"]=="image/gif"  || $_FILES["photo"]["type"]=="image/png")
						{
					
					move_uploaded_file($_FILES['photo']['tmp_name'], $uploaddir.$pic1new1);
					@$sql="update pub_opp_tblstr_d set photo='$pic1new1' where id='$id'";
					@$res=mysqli_query($con,$sql) or die(mysqli_error());					
			}	
			}
			chmod("../uploads/publication-opportunities/".$pic1new1,0777);			
			header("location:publications.php");			
			
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
  <title>Add Publication Opportunities | Dashboard</title>

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
            <h1>Add Publication Opportunities</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Add Publication Opportunities</a></div>
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
                      <label for="inputName3" class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" class="textbox" value="<?php echo @$edus_rw['name'];?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Content 1</label>
                      <div class="col-sm-6">
                        <textarea name="field1" class="form-control"><?php echo @$edus_rw['field1'];?></textarea>
                      </div>
                    </div>
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Publication Photo</label>
                      <div class="col-sm-6">
                       <div class="custom-file">
                      <input type="file" class="custom-file-input" name="photo" id="photo" accept="image/x-png,image/gif,image/jpeg,image/jpg">
                      <label class="custom-file-label" for="customFile">Choose file</label>
					  <font color='red'>Dimensions : 150 (W) x 150(H)</font>
                    <?php
					  if(@$edus_rw['photo']!="")
					  { ?>
									  <br />
										<img src="../uploads/publication-opportunities/<?php echo @$edus_rw['photo']; ?>" border="0" width="85" height="119"/>
										<?php
					  } ?>
                    </div>
                      </div>
                    </div>
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Content 2</label>
                      <div class="col-sm-6">
                        <textarea  name="field2"  class="form-control"><?php echo @$edus_rw['field2'];?></textarea>
                      </div>
                    </div>
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Content 3</label>
                      <div class="col-sm-6">
                        <textarea name="field3"  class="form-control"><?php echo @$edus_rw['field3'];?></textarea>
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