<?php
session_start();
//$_SESSION['sess_member']=$_GET['id'];
//$_SESSION['cname']=$_GET['cname'];
$_SESSION['start'] = time(); // Taking now logged in time.
$_SESSION['expire'] = $_SESSION['start'] + (60 * 60);//ending tome of 1hr
include("inc/config.php");
if(!isset($_SESSION['cname']))
{
	header('location:index.php');
}

$userId=$_SESSION['sess_member'];

if(isset($_POST['NumofAttr']))
{
	for($i=1;$i<=$_POST['NumofAttr'];$i++)
	{
		//echo "AttName ".$_POST['AttName'.$i].",  "."AttLink ".$_POST['AttLink'.$i]." <br /> ";
		$Attraction=$_POST['AttName'.$i];
		$AttractionLink=$_POST['AttLink'.$i];
		$AttId=$_POST['AttId'.$i];
		if($_POST['AttName'.$i] != "" || $_POST['AttName'.$i] != null)
		{
			$result = mysqli_query($con,"SELECT * FROM cityattractions_tblstr_d where id='$AttId' and  user='$userId'");
			if(mysqli_fetch_array($result))
			{
				//echo "ID ".$AttId.": ".$Attraction."<br />";
				mysqli_query($con,"update cityattractions_tblstr_d set Attraction='".$_POST['AttName'.$i]."', AttractionLink='".$_POST['AttLink'.$i]."' where id='$AttId'");
			}
			else
			{
				mysqli_query($con,"INSERT INTO `cityattractions_tblstr_d` (`Attraction`, `AttractionLink`, `user`, `id`) VALUES ('".$_POST['AttName'.$i]."', '".$_POST['AttLink'.$i]."', '$userId', NULL)");
			}
		}
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Venue Attractions | Dashboard</title>

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
  <script type="text/javascript">
	function addImg(){
	
var wd=document.getElementById('images').innerHTML;
var wd1=document.getElementById('images');
var sn=wd1.getElementsByTagName('span').length+1;
var fu=document.getElementById("formup").innerHTML;
document.getElementById("sn").value=sn;
var addthis="<span id='spcon"+sn+"'>Upload City Image: <input type='file' name='"+sn+"' /></span>";
document.getElementById('images').innerHTML=wd+addthis+"<br>";

if(fu == "" || fu == null){
document.getElementById("formup").innerHTML="<input type='submit' value='Upload' />";
}

	}
	
	function delImg(CityImg){
	var stat = confirm("Are you sure you want to delete?");	
	if(stat!="")
	{
	
			location.href="delTAttr.php?CityImg="+CityImg;
	
	}
	else
		{ 
		}	
	}
	</script>
    <script type="text/javascript">
	
function AddAttr(){
var wd1=document.getElementById('attractions');
var snDiv=wd1.getElementsByTagName('div').length+1;
var wd="";
document.getElementById("NumofAttr").value=snDiv;
var NumofAttr=document.getElementById("NumofAttr").value;

//alert(NumofAttr);
for(var i=1;i<snDiv;i++){
var wdd = "";
var AttName=document.getElementById("AttName"+i).value;
var AttLink=document.getElementById("AttLink"+i).value;
var AttId=document.getElementById("AttId"+i).value;
if(AttId == "" || AttId == null){
AttId=0;	
}
var wd = wd+ "<div id='"+i+"'>Attractions &amp; LandMark <input type='hidden' class='textbox' id='AttName"+i+"' name='AttName"+i+"' value='City Attraction' /> &nbsp;Image Link:<input type='text' class='textbox' id='AttLink"+i+"' name='AttLink"+i+"' value='"+AttLink+"' /><input type='hidden' class='textbox' id='AttId"+i+"' name='AttId"+i+"' value='"+AttId+"' /><a href='javascript:DelAttr("+i+","+AttId+")'>Delete</a></div>";
}

var addthis="<div id='"+snDiv+"'>Attractions &amp; LandMark <input type='hidden' class='textbox' id='AttName"+snDiv+"' name='AttName"+snDiv+"' value='City Attraction' /> &nbsp;Image Link:<input type='text' class='textbox' id='AttLink"+snDiv+"' name='AttLink"+snDiv+"' value='' /><input type='hidden' class='textbox' id='AttId"+snDiv+"' name='AttId"+snDiv+"' value='' /><a href='javascript:DelAttr("+snDiv+",0)'>Delete</a></div>";
document.getElementById('attractions').innerHTML=wd+addthis;
}
	
function DelAttr(DivId,Attrid){
	
var stat = confirm("Are you sure you want to delete?");	
	if(stat!="")
	{
	
			location.href="delTAttr.php?Attrid="+Attrid;
	
	}
	else
		{ 
		}
}
	</script>
</head>

<body>

  <div id="app">
    <?php include('header.php');?>
    <?php include('sidemenu.php');?>
        <!-- Main Content -->
      <div class="main-content">
        <section class="section">
           <div class="section-header">
            <h1>Venue Attractions</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Venue Attractions</a></div>
             <!-- <div class="breadcrumb-item"> </div>-->
            </div>
          </div>
		   
			 <br>
          <div class="row">
             <div class="col-12 mb-4">
			 <div class="card">
                  <div class="card-body">
                    <div class="empty-state">
                       <!-------------------------------------------------->
					   
					         <div align="center" id="maindiv">

							<div id="formdiv">
								<h3>Upload images for the city attractions here(Upload atleast 6 images)</h3>
								<form enctype="multipart/form-data" action="" method="post">
									First Field is Compulsory. Only JPEG,PNG,JPG Type Image Uploaded. Image Size Should Be Less Than 1000KB.
									<hr/>
									<div id="filediv">
									<div class="custom-file">
									<input name="file[]" class="custom-file-input" id="customFile" type="file" id="file"/>
									<label class="custom-file-label" for="customFile">Choose file</label>
									</div>
									</div>
									<br/>
						                             
									<input type="button" id="add_more" class="upload btn btn-info" value="Add More Files"/>
									<input type="submit" value="Upload File" name="submit" id="upload" class="upload btn btn-info"/>
								</form>
								 
								<!-------Including PHP Script here------>
								<?php include "upload.php"; ?>
							</div>
						</div>
					   
					   
                       <!-------------------------------------------------->
					   <h2 align="center">Copy the city attraction link above and paste in the image link section below</h2>
							<div align="right"><a class="btn btn-icon icon-left btn-info" href="javascript:AddAttr()"><strong><i class="fas fa-plus"></i> Add Attraction</strong></a></div>
					   <form action="" method="post">
							<div align="center" id="attractions">
							<?php
							$result2=mysql_query("select * from cityattractions_tblstr_d where user='$userId' order by id ASC");
							$a=1;
							while($row=mysql_fetch_array($result2)){
							?>
							 <div style="padding:10px" id='<?php echo $a; ?>'><!--Attractions &amp; LandMark:--> <input type='hidden' class='textbox form-control' id='AttName<?php echo $a; ?>' name='AttName<?php echo $a; ?>' value="City Attraction" /> &nbsp;Image link:<input type='text' class='textbox form-control' id='AttLink<?php echo $a; ?>' name='AttLink<?php echo $a; ?>' value='<?php echo $row['AttractionLink']; ?>' /><input type='hidden' class='textbox form-control' id='AttId<?php echo $a; ?>' name='AttId<?php echo $a; ?>' value='<?php echo $row['id']; ?>' /><a href='javascript:DelAttr(<?php echo $a; ?>,<?php echo $row['id']; ?>)'>Delete</a></div>
							 <?php
							 $a++;
							  }	 
							 ?>
							</div><input type='hidden' name='NumofAttr' id='NumofAttr' value='<?php echo $a-1; ?>' /><input type="submit" class="btn btn-info" value="Submit" />
							
							</form>
					 
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
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
 
</html>