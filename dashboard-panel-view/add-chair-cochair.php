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
			@$qrx_edus = "select *from conference_chair_tblstr_d where id='$id'";
			@$edus_rs = mysqli_query($con,$qrx_edus);
			@$edus_rw = mysqli_fetch_assoc($edus_rs);		
		}
		//---------------------			
		$msg="";
		//-----------------
		    @$uploaddir = "../uploads/photos/";			
		//-----------------				
			if(isset($_POST['add']))
			{	
            $heading		=	$_POST['heading'];			
			$name			=	$_POST['name'];	
			$category			=	$_POST['category'];	
			$affiliation	=	mysqli_real_escape_string($con,$_POST['affiliation']);	
			$biography	=	mysqli_real_escape_string($con,$_POST['biography']);
			 

			    mysqli_query($con,"insert into conference_chair_tblstr_d(heading,name,category,affiliation,biography,user) values('$heading','$name','$category','$affiliation','$biography','".$_SESSION['sess_member']."')") or die(mysqli_error($con));	
				$sk_id = mysqli_insert_id($con);
			//------------------File Attachment 1 ---------------		    
			$pic1name1 = $_FILES['photo']['name'];
			if($pic1name1 != "")
			{
					$pic1arr1 = explode(".",$pic1name1);
					$pic1new1 = $sk_id."-chairpersons-pic.".$pic1arr1[count($pic1arr1)-1];
					
					if($_FILES["photo"]["type"]=="image/jpeg" || $_FILES["photo"]["type"]=="image/jpg" || $_FILES["photo"]["type"]=="image/gif"  || $_FILES["photo"]["type"]=="image/png")
						{		
			
					move_uploaded_file($_FILES['photo']['tmp_name'], $uploaddir.$pic1new1);
					$sql="update conference_chair_tblstr_d set photo='$pic1new1' where id='$sk_id'";
					$res=mysqli_query($con,$sql) or die(mysqli_error());					
			}
			}
			chmod("../uploads/photos/".$pic1new1,0777);	
			
			//---------------------------------------------------								
				header("location:chair-cochair");			
			//}	
			}
			else
				{
				$error = "Error !!, Only jpg and jpeg and gif and png image allowed";
				}
						
			if(isset($_POST['edit']))
			{	
			$heading		=	$_POST['heading'];			
			$name			=	$_POST['name'];
			$category	    =	$_POST['category'];
			$affiliation	=	mysqli_real_escape_string($con,$_POST['affiliation']);	
			$biography	=	mysqli_real_escape_string($con,$_POST['biography']);										
			mysqli_query($con,"update conference_chair_tblstr_d set heading='$heading',name='$name',category='$category',affiliation='$affiliation',biography='$biography' where id='$id'");	
			//------------------File Attachment 1 ---------------		    
			@$pic1name1 = $_FILES['photo']['name'];
			if($pic1name1 != "")
			{
					$pic1arr1 = explode(".",$pic1name1);
					$pic1new1 = $id."-chairpersons-pic.".$pic1arr1[count($pic1arr1)-1];
					
					if($_FILES["photo"]["type"]=="image/jpeg" || $_FILES["photo"]["type"]=="image/jpg" || $_FILES["photo"]["type"]=="image/gif"  || $_FILES["photo"]["type"]=="image/png")
									{			
			
					
					move_uploaded_file($_FILES['photo']['tmp_name'], $uploaddir.$pic1new1);
					$sql="update conference_chair_tblstr_d set photo='$pic1new1' where id='$id'";
					$res=mysqli_query($con,$sql) or die(mysqli_error());					
			}	
			}
			chmod("photos/".$pic1new1,0777);			
			header("location:chair-cochair");			
			
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
  <title>Add Conference Chair and Co Chair | Dashboard</title>

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
            <h1>Add Conference Chair and Co Chair</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Add Conference Chair and Co Chair</a></div>
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
                      <label for="inputName3" class="col-sm-3 col-form-label">Select Category</label>
                      <div class="col-sm-6">
                         <select class="form-control" name="category">
                             
                             <option selected value="<?php echo @$edus_rw['category']; ?>"><?php echo @$edus_rw['category']; ?></option>
                             <option name="Conference or Co Chair" value="Conference or Co Chair">Conference or Co Chair</option>
                             <option name="Co Chairmen" value="Co Chairmen">Co Chairmen</option>
                         </select>
                      </div>
                    </div>
				   <div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Conference or Co Chair Heading</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="heading" class="textbox" value="<?php echo @$edus_rw['heading'];?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Name</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" class="textbox" value="<?php echo @$edus_rw['name'];?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Affiliation</label>
                      <div class="col-sm-6">
                        <textarea name="affiliation" class="form-control"><?php echo @$edus_rw['affiliation'];?></textarea>
                      </div>
                    </div>
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Photo</label>
                      <div class="col-sm-6">
                       <div class="custom-file">
                      <input type="file" class="custom-file-input" name="photo" id="photo" accept="image/x-png,image/gif,image/jpeg,image/jpg">
                      <label class="custom-file-label" for="customFile">Choose file</label>
					  <font color='red'>Dimensions : 150 (W) x 150(H)</font>
                    <?php
					  if(@$edus_rw['photo']!="")
					  { ?>
									  <br />
										<img src="../uploads/photos/<?php echo @$edus_rw['photo']; ?>" border="0" width="85" height="119"/>
										<?php
					  } ?>
                    </div>
                      </div>
                    </div>
					
					<div class="form-group row">
                      <label for="inputName3" class="col-sm-3 col-form-label">Biography</label>
                      <div class="col-sm-6">
                        <textarea  name="biography"  class="form-control"><?php echo @$edus_rw['biography'];?></textarea>
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