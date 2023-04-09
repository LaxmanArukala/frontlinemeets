<?php
ob_start();
session_start();
include("inc/config.php");
if(!isset($_SESSION['sess_member']))
{
	header('location:index.php');
}

	$important_details_result=mysqli_query($con,"select * from important_details_tblstr_d where id='".$_SESSION['sess_member']."'");
	$row = mysqli_fetch_array($important_details_result);
	if(mysqli_num_rows($important_details_result)>0)
	{
			if(isset($_POST['submit']))
			{					
				$ConferenceTitle1	=	mysqli_real_escape_string($con,$_POST['ConferenceTitle1']);				
				$ConferenceTitle2	=	mysqli_real_escape_string($con,$_POST['ConferenceTitle2']);				
				$ConferenceTitle	=	$ConferenceTitle1."<br>".$ConferenceTitle2;				
				$theme1	=	mysqli_real_escape_string($con,$_POST['Theme1']);				
			    $ins = mysqli_query($con,"update important_details_tblstr_d set ShortName='".$_POST['ShortName']."',ConfUrl='".$_POST['ConfUrl']."',ConferenceTitle='$ConferenceTitle',ConferenceVenue='".$_POST['ConferenceVenue']."',ConferenceDates='".$_POST['ConferenceDates']."',Theme='$theme1',EmailId1='".$_POST['EmailId1']."',abstract_submission_opens='".$_POST['abstract_submission_opens']."',registration_opens='".$_POST['registration_opens']."',EarlyBird='".$_POST['EarlyBird']."',mid_term='".$_POST['mid_term']."',OnSpot='".$_POST['OnSpot']."',facebook_link='".$_POST['facebook_link']."',twitter_link='".$_POST['twitter_link']."',twitter_tweets='".$_POST['twitter_tweets']."',timer='".$_POST['timer']."' where id='".$_SESSION['sess_member']."'") or die(mysqli_error($con));	
				if($ins)
				{
					$msg="Details are updated";
				}
			}		
	}
	else
	{
		if(isset($_POST['submit']))
		{
			$ConferenceTitle1	=	mysqli_real_escape_string($con,$_POST['ConferenceTitle1']);				
			$ConferenceTitle2	=	mysqli_real_escape_string($con,$_POST['ConferenceTitle2']);				
			$ConferenceTitle	=	$ConferenceTitle1."<br>".$ConferenceTitle2;				
			$theme1	=	mysqli_real_escape_string($con,$_POST['Theme1']);	
			$ins = mysqli_query($con,"insert into important_details_tblstr_d(id,ShortName,ConfUrl,Theme,EmailId1,abstract_submission_opens,registration_opens,EarlyBird,mid_term,OnSpot,ConferenceTitle,ConferenceVenue,ConferenceDates,facebook_link,twitter_link,twitter_tweets) values('".$_SESSION['sess_member']."','".$_POST['ShortName']."','".$_POST['ConfUrl']."','$theme1','".$_POST['twitter_tweets']."','".$_POST['EmailId1']."','".$_POST['abstract_submission_opens']."','".$_POST['registration_opens']."','".$_POST['EarlyBird']."','".$_POST['mid_term']."','".$_POST['OnSpot']."','$ConferenceTitle','".$_POST['ConferenceVenue']."','".$_POST['ConferenceDates']."','".$_POST['timer']."')") or die(mysqli_error($con));			
			if($ins)
			{
				$msg="Details are updated";
			}
		}
		
	}
		



	$important_details_result=mysqli_query($con,"select * from important_details_tblstr_d where id='".$_SESSION['sess_member']."'");
	$row = mysqli_fetch_array($important_details_result);
	if (strpos($row['ConferenceTitle'], '<br>') == true) 
	{
		$title = explode("<br>", $row['ConferenceTitle']);
	}

?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Important Information | Dashboard</title>

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
function supbold(id)
{
  var textComponent = document.getElementById('ConferenceTitle1');
  var textComponent1 = document.getElementById('ConferenceTitle1').value;
  var selectedText;
  // IE version
  if (document.selection != undefined)
  {
    textComponent.focus();
    var sel = document.selection.createRange();
    selectedText = sel.text;
  }
  // Mozilla version
  else if (textComponent.selectionStart != undefined)
  {
    var startPos = textComponent.selectionStart;
    var endPos = textComponent.selectionEnd;
    selectedText = textComponent.value.substring(startPos, endPos);
	 selectedText5 = textComponent.value.substring(startPos-2, endPos+4);
	 startPos1 = textComponent.value.substring(startPos-2, startPos);
	 endPos1 = textComponent.value.substring(endPos, endPos+4);
  }
  //alert("You selected: " + selectedText);
  //alert(textComponent1);
  if(id == 1){
  var repContent=startPos1+"<sup>"+selectedText+"</sup>"+endPos1;
  }
  if(id == 2){
  var repContent=startPos1+"<b>"+selectedText+"</b>"+endPos1;
  }
  
  //document.getElementById("result").innerHTML="superscript:<sup>"+selectedText+"</sup>";
//alert("selectedText5 :"+selectedText5);
//alert("repContent :"+repContent);
  var g=textComponent1.replace(selectedText5,repContent);
  document.getElementById("ConferenceTitle1").value=g;
  document.getElementById("result").innerHTML="<strong>Conference Title :</strong>&nbsp;&nbsp;"+g;
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
            <h1>Important Information</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Important Information</a></div>
             <!-- <div class="breadcrumb-item"> </div>-->
            </div>
          </div>
          <div class="row">
             <div class="col-12 mb-4">
               <div class="card">
                    <div class="card-body">
                        <form method="post" action="">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Conference ShortName:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="ShortName" id="ShortName" value="<?php echo $row['ShortName'];?>" >
                      </div>
                    </div>
					 <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Conference Complete URL:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="ConfUrl" id="ConfUrl" value="<?php echo $row['ConfUrl'];?>" >
                      </div>
                    </div>
					 <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Conference Title:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="ConferenceTitle1" id="ConferenceTitle1" value="<?php echo $title[0];?>" />
						<br>
						<input type="button" class="btn btn-info" value="superscript" onClick="supbold(1)" /><br>
						<span style="color:red">ex: 2<sup>nd</sup> International Conference On</span>
						<div style="font-size:11px">Note: select the text and click <strong>superscript </strong> to make changes and then update to see in website.</div>
                      </div>
                    </div>
					 <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Conference Subject:</label>
                      <div class="col-sm-6">
                        <textarea class="form-control"name="ConferenceTitle2" id="ConferenceTitle2" ><?php echo $title[1]; ?></textarea><br /><span style="color:red">Example: Material Science & Engineering</span>
                      </div>
                    </div>
					 <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Conference Venue:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="ConferenceVenue" id="ConferenceVenue" value="<?php echo $row['ConferenceVenue'];?>" />
                      </div>
                    </div>
					 <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Conference Dates:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="ConferenceDates" id="ConferenceDates"  value="<?php echo $row['ConferenceDates'];?>" >
                      </div>
                    </div>
					 <!--<div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Conference ShortName:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="ShortName" id="ShortName" value="<?php echo $row['ShortName'];?>" >
                      </div>
                    </div>-->
					 <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Conference Theme:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="Theme1" id="Theme1" value="<?php echo $row['Theme'];?>">
                      </div>
                    </div>
					 <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Conference EmailId1 (PRIMARY):</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control"  name="EmailId1" id="EmailId1"  value="<?php echo $row['EmailId1'];?>" >
                      </div>
                    </div>
					 <!--<div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Conference EmailId2 (Secondary):</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="EmailId2" id="EmailId2" value="<?php echo $row['EmailId2'];?>"  >
                      </div>
                    </div>--> 
					<div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Abstract Submission Deadline Date:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control"  name="abstract_submission_opens" id="abstract_submission_opens" value="<?php echo $row['abstract_submission_opens'];?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">EarlyBird Registrstion Date:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control"  name="EarlyBird" id="EarlyBird" value="<?php echo $row['EarlyBird'];?>">
                      </div>
                    </div>
					<div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Standard Registration Date:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="mid_term" id="mid_term" value="<?php echo $row['mid_term'];?>">
                      </div>
                    </div>
					<div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">On Spot Registrstion Date:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="OnSpot" id="OnSpot" value="<?php echo $row['OnSpot'];?>">
                      </div>
                    </div>
					<div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Enter Timer Date:</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="timer" id="timer" type="text" value="<?php echo $row['timer'];?>" /><span style="color: red">Format: (DD-Jan-YYYY)</span>
                      </div>
                    </div>
					 
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