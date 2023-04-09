<?php
session_start();
include("../inc/config.php");
if(!isset($_SESSION['sess_member']))
{
	header('location:conf.php');
}

@$mem_id = @$_SESSION['sess_member']; 
@$id = @$_GET['id'];
@$sid = @$_GET['sid'];
@$day = @$_GET['day'];
@$date = @$_GET['date'];
//---------------------------
if(@$sid=="")
{
@$q2_csp = "select c.id,c.venue,c.Title,c.Theme,c.Dates,c.EmailId1,c.EmailId2,c.EmailId3,c.WebUrl, l.conference,s.conference,s.user,s.day FROM editConference c, login_details l, scientific_programme s WHERE c.id=l.conference and s.conference=l.conference and s.day='1' and s.user='".$_SESSION['sess_member']."'";
}
else
{
@$q2_csp = "select c.id,c.venue,c.Title,c.Theme,c.Dates,c.EmailId1,c.EmailId2,c.EmailId3,c.ConfUrl, l.conference,s.conference,s.user,s.day,s.sid FROM editConference c, login_details l, scientific_programme s WHERE c.id=l.conference and s.conference=l.conference and s.day='$day' and s.user='".$_SESSION['sess_member']."'";
}
@$csp_rs2 = mysql_query($q2_csp); 
@$row_q2 = mysql_fetch_assoc($csp_rs2);	
@$g_sid = 	@$row_q2['sid'];
//---------------------------
@$q4_csp = "select time,place from conf_keynote where user='".$_SESSION['sess_member']."'";
@$csp_rs4 = mysql_query($q4_csp); 
@$row_q4 = mysql_fetch_assoc($csp_rs4);				 		       
//---------------------------
?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Scientific Program | Preview</title>
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../images/favicon.ico" type="image/x-icon">
  	<meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/style-new.css">
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript" src="js/scrolltopcontrol.js"></script>
    <script src="js/site.js" type="text/javascript"></script>
	<script type="text/javascript">
	function jumptolink(what)
	{
		var selectedopt=what.options[what.selectedIndex]
		if (document.getElementById || selectedopt.getAttribute("target")=="blank")
		window.open(selectedopt.value)
		else
		window.location=selectedopt.value
	}
	</script>  
    <style>
	.button-s {
	display:inline-block;
	font-family: 'Open Sans', sans-serif;
	font-weight:bold;
	color:#fff;
	font-size:12px;
	line-height:15px;
	text-transform:uppercase;
	padding:8px 18px 8px;
	background: #1a5bae;
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzFhNWJhZSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjIwJSIgc3RvcC1jb2xvcj0iIzE5NTdhNiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9Ijc3JSIgc3RvcC1jb2xvcj0iIzE0NDQ4MSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMxMjNlNzciIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top, #1a5bae 0%, #1957a6 20%, #144481 77%, #123e77 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#1a5bae), color-stop(20%,#1957a6), color-stop(77%,#144481), color-stop(100%,#123e77));
	background: -webkit-linear-gradient(top, #1a5bae 0%,#1957a6 20%,#144481 77%,#123e77 100%);
	background: -o-linear-gradient(top, #1a5bae 0%,#1957a6 20%,#144481 77%,#123e77 100%);
	background: -ms-linear-gradient(top, #1a5bae 0%,#1957a6 20%,#144481 77%,#123e77 100%);
	background: linear-gradient(to bottom, #1a5bae 0%,#1957a6 20%,#144481 77%,#123e77 100%);
	filter:none;
	border-radius:5px;
	box-shadow:0 1px 3px rgba(0,0,0,.3);
}
.button-s:hover {
	background: #123e77;
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzEyM2U3NyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjIzJSIgc3RvcC1jb2xvcj0iIzE0NDQ4MSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjgwJSIgc3RvcC1jb2xvcj0iIzE5NTdhNiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMxYTViYWUiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top, #123e77 0%, #144481 23%, #1957a6 80%, #1a5bae 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#123e77), color-stop(23%,#144481), color-stop(80%,#1957a6), color-stop(100%,#1a5bae));
	background: -webkit-linear-gradient(top, #123e77 0%,#144481 23%,#1957a6 80%,#1a5bae 100%);
	background: -o-linear-gradient(top, #123e77 0%,#144481 23%,#1957a6 80%,#1a5bae 100%);
	background: -ms-linear-gradient(top, #123e77 0%,#144481 23%,#1957a6 80%,#1a5bae 100%);
	background: linear-gradient(to bottom, #123e77 0%,#144481 23%,#1957a6 80%,#1a5bae 100%);
	filter:none;
}

	</style>
</head>
<body>
<!-- Content -->
<section id="content">
<div align="center">
<table width="1024" cellpadding="0" cellspacing="0" align="center">
<tr>
<td width="1024" align="left">
<article class="grid_6 omega">
<h2>Scientific Programme(<?php echo "Day ".@$day." : ".date('M-d-Y',strtotime(@$date)); ?>)</h2>
<?php
				 $q1_csp = "select day,date,sid from scientific_programme where conference='".$_SESSION['sess_member']."' order by day ASC";
		         $csp_rs = mysql_query($q1_csp); 
				 $k=1;
		         while($row_q1 = mysql_fetch_assoc($csp_rs))
				 {
                 $d=$k-1;
		         ?>	
                 <div style="float:left; padding-left:150px; margin-bottom:30px" class="rel"><a class="button-s" href="scientific-programme.php?day=<?php echo $row_q1['day']; ?>&sid=<?php echo $row_q1['sid']; ?>&date=<?php echo $row_q1['date']; ?>" title="Day : <?php echo $k; ?>"><?php echo "Day ".$k." : ".date('M-d-Y',strtotime($row_q1['date'])); ?></a></div>
				 <?php $k=$k+1;} ?>
                 <div class="clear"></div>
<?php if($day=="1") {  ?>
<?php
	 $q3_csp = "select *from keynotes where user='".$_SESSION['sess_member']."' order by recordListingID ASC";
     $csp_rs3 = mysql_query($q3_csp); 
     while($row_q3 = mysql_fetch_assoc($csp_rs3))
	 {				
	 	  $img_pth = "../photos/".$row_q3['speaker_photo'];
?>
<h4>Keynote Forum</h4>
<div style="padding-bottom:7px;"><strong style="font-weight:bold; color:#333; font-size:16px;"><?php if($row_q3['speaker_name']=="Speech Opportunity Available") { echo "<font color='green'>".$row_q3['speaker_name']."</font>"; } else { echo $row_q3['speaker_name']; } ?></strong></div>
<div style="padding-bottom:7px;"><strong style="font-weight:bold; color:#333; font-size:12px;"><?php echo $row_q3['speaker_affiliation']; ?></strong></div>
<div style="padding-bottom:7px;"><strong style="font-weight:bold; color:#333; font-size:12px;"><span style="color:#03C">keynote:</span> <?php echo $row_q3['tittle']; ?></strong></div>
<div style="padding-bottom:7px; text-align:justify;"><?php if($row_q3['speaker_photo']!="") { ?><img src="../photos/<?php echo $row_q3['speaker_photo']; ?>" width="90" height="102" style="padding-right:5px; padding-bottom:5px; padding-top:5px;" align="left"><?php } ?><span style="color:#333; font-weight:bold">Biography:</span><br><?php echo $row_q3['biography']; ?>
<br><br>
<span style="color:#333; font-weight:bold">Abstract:</span><br>
<?php echo $row_q3['abstract']; ?> </div>
<div style="color:#03C; font-weight:bold; font-size:16px"><?php echo $row_q3['break']; ?></div>
<hr></hr>
<?php } }?>	
<?php
if($sid!="")
{
	$q6_csp = "select *from tracks where user='".$_SESSION['sess_member']."' and sid='$sid' order by recordListingID ASC";
}
else
{
	$q6_csp = "select *from tracks where user='".$_SESSION['sess_member']."' and sid='$g_sid' order by recordListingID ASC";
}
$csp_rs6 = mysql_query($q6_csp); 
while($row_q6 = mysql_fetch_assoc($csp_rs6))
{
?>
<div style="border-bottom:1px solid #7B8288; width:auto;" align="center"><a href="abstract.php" style="text-decoration:none; color:#272929; font-weight:900; font-size:16px">Speech Opportunity Available</a></div>
<div style="color:#004080; background-color:#666; font-weight:bold; font-size:18px; padding-top:10px; padding-bottom:10px; padding-left:5px"><?php echo $row_q6['track_name']; ?></div>
<?php if($row_q6['session_name']!="") { ?>
<div style="padding-bottom:7px;"><img src="../photos/<?php echo $row_q6['session_photo']; ?>" width="90" height="102" style="padding-right:5px; padding-bottom:5px; padding-top:5px;" align="left"><span style="color:#333; font-weight:bold">Session Chair:</span><br>
<strong style="font-weight:bold; color:#333; font-size:16px;"><?php echo $row_q6['session_name']; ?></strong><br>
<strong style="font-weight:bold; color:#333; font-size:14px;"><?php echo $row_q6['session_affiliation']; ?></strong>
<br><br>
</div>
<hr></hr>
<?php } ?>	
<?php if($row_q6['cosession_name']!="") { ?>
<div style="padding-bottom:7px;"><img src="../photos/<?php echo $row_q6['cosession_photo']; ?>" width="90" height="102" style="padding-right:5px; padding-bottom:5px; padding-top:5px;" align="left"><span style="color:#333; font-weight:bold">Session Co-Chair:</span><br>
<strong style="font-weight:bold; color:#333; font-size:16px;"><?php echo $row_q6['cosession_name']; ?></strong><br>
<strong style="font-weight:bold; color:#333; font-size:14px;"><?php echo $row_q6['cosession_affiliation']; ?></strong>
<br><br>
</div>
<hr></hr>
<?php } ?>	
<h4>Session Introduction</h4>
<?php
		 $q61_csp = "select *from track_speakers where user='".$_SESSION['sess_member']."' and track='".$row_q6['id']."' order by recordListingID ASC";
         $csp_rs61 = mysql_query($q61_csp); 
		 if(mysql_num_rows($csp_rs61)>0)
         while($row_q61 = mysql_fetch_assoc($csp_rs61))
		 {
         ?>	    
		 <?php if($row_q61['plenary_name']!="") { ?>
<div style="padding-bottom:7px;"><strong style="font-weight:bold; color:#333; font-size:16px;"><?php if($row_q61['plenary_name']=="Speech Opportunity Available") { echo "<font color='green'>".$row_q61['plenary_name']."</font>"; } else { echo $row_q61['plenary_name']; } ?></strong></div>
<div style="padding-bottom:7px;"><strong style="font-weight:bold; color:#333; font-size:12px;"><?php echo $row_q61['plenary_affiliation']; ?></strong></div>
<div style="padding-bottom:7px;"><strong style="font-weight:bold; color:#333; font-size:12px;"><span style="color:#03C">Plenary Speech<br />Title:</span> <?php echo $row_q61['plenary_title']; ?></strong></div>
<div style="padding-bottom:7px; text-align:justify;"><?php if($row_q61['plenary_photo']!="") { ?><img src="../photos/<?php echo $row_q61['plenary_photo']; ?>" width="90" height="102" style="padding-right:5px; padding-bottom:5px; padding-top:5px;" align="left"><?php } ?><span style="color:#333; font-weight:bold">Biography:</span><br><?php echo $row_q61['biography']; ?>
<br><br>
<span style="color:#333; font-weight:bold">Abstract:</span><br>
<?php echo $row_q61['abstract']; ?> </div>
<hr></hr>
<?php } ?>
<div style="padding-bottom:7px;"><strong style="font-weight:bold; color:#333; font-size:16px;"><?php if($row_q61['speaker_name']=="Speech Opportunity Available") { echo "<font color='green'>".$row_q61['speaker_name']."</font>"; } else { echo $row_q61['speaker_name']; } ?></strong></div>
<div style="padding-bottom:7px;"><strong style="font-weight:bold; color:#333; font-size:12px;"><?php echo $row_q61['speaker_affiliation']; ?></strong></div>
<div style="padding-bottom:7px;"><strong style="font-weight:bold; color:#333; font-size:12px;"><span style="color:#03C">Title:</span> <?php echo $row_q61['speaker_title']; ?></strong></div>
<div style="padding-bottom:7px; text-align:justify;"><?php if($row_q61['speaker_photo']!="") { ?><img src="../photos/<?php echo $row_q61['speaker_photo']; ?>" width="90" height="102" style="padding-right:5px; padding-bottom:5px; padding-top:5px;" align="left"><?php } ?><span style="color:#333; font-weight:bold">Biography:</span><br><?php echo $row_q61['biography']; ?>
<br><br>
<span style="color:#333; font-weight:bold">Abstract:</span><br>
<?php echo $row_q61['abstract']; ?> </div>
<div style="color:#03C; font-weight:bold; font-size:16px"><?php echo $row_q61['break']; ?></div>
<hr></hr>
<?php
$q7_csp = "select *from sub_tracks where user='".$_SESSION['sess_member']."' and track_id='".$row_q6['id']."' order by recordListingID ASC";
$csp_rs7 = mysql_query($q7_csp); 
while($row_q7 = mysql_fetch_assoc($csp_rs7))
{
?>
<div style="color:#0772ba; background-color:#CCC; font-weight:bold; font-size:18px; padding-top:10px; padding-bottom:10px; padding-left:5px"><?php echo $row_q7['strack_name']; ?></div>
<?php if($row_q7['session_name']!="") { ?>
<div style="padding-bottom:7px;"><img src="../photos/<?php echo $row_q7['session_photo']; ?>" width="90" height="102" style="padding-right:5px; padding-bottom:5px; padding-top:5px;" align="left"><span style="color:#333; font-weight:bold">Session Chair:</span><br>
<strong style="font-weight:bold; color:#333; font-size:16px;"><?php echo $row_q7['session_name']; ?></strong><br>
<strong style="font-weight:bold; color:#333; font-size:14px;"><?php echo $row_q7['session_affiliation']; ?></strong>
<br><br>
</div>
<hr></hr>
<?php } ?>	
<?php if($row_q7['cosession_name']!="") { ?>
<div style="padding-bottom:7px;"><img src="../photos/<?php echo $row_q7['cosession_photo']; ?>" width="90" height="102" style="padding-right:5px; padding-bottom:5px; padding-top:5px;" align="left"><span style="color:#333; font-weight:bold">Session Co-Chair:</span><br>
<strong style="font-weight:bold; color:#333; font-size:16px;"><?php echo $row_q7['cosession_name']; ?></strong><br>
<strong style="font-weight:bold; color:#333; font-size:14px;"><?php echo $row_q7['cosession_affiliation']; ?></strong>
<br><br>
</div>
<hr></hr>
<?php } ?>	
<?php
	 $q8_csp = "select *from speaker_info where user='".$_SESSION['sess_member']."' and sub_track='".$row_q7['id']."' and display='1' order by recordListingID ASC";
     $csp_rs8 = mysql_query($q8_csp); 
	 if(mysql_num_rows($csp_rs8)>0)
	 {
	 ?>
	 <h4>Session Introduction</h4>
	 <?php
	 }
         while($row_q8 = mysql_fetch_assoc($csp_rs8))
		 {
         ?>	 
		 <?php if($row_q8['plenary_name']!="") { ?> 
<div style="padding-bottom:7px;"><strong style="font-weight:bold; color:#333; font-size:16px;"><?php if($row_q8['plenary_name']=="Speech Opportunity Available") { echo "<font color='green'>".$row_q8['plenary_name']."</font>"; } else { echo $row_q8['plenary_name']; } ?></strong></div>
<div style="padding-bottom:7px;"><strong style="font-weight:bold; color:#333; font-size:12px;"><?php echo $row_q8['plenary_affiliation']; ?></strong></div>
<div style="padding-bottom:7px;"><strong style="font-weight:bold; color:#333; font-size:12px;"><span style="color:#03C">Plenary Speech<br />Title:</span> <?php echo $row_q8['plenary_title']; ?></strong></div>
<div style="padding-bottom:7px; text-align:justify;"><?php if($row_q8['plenary_photo']!="") { ?><img src="../photos/<?php echo $row_q8['plenary_photo']; ?>" width="90" height="102" style="padding-right:5px; padding-bottom:5px; padding-top:5px;" align="left"><?php } ?><span style="color:#333; font-weight:bold">Biography:</span><br><?php echo $row_q8['biography']; ?>
<br><br>
<span style="color:#333; font-weight:bold">Abstract:</span><br>
<?php echo $row_q8['abstract']; ?> </div>
<hr></hr>
<?php } ?>
<div style="padding-bottom:7px;"><strong style="font-weight:bold; color:#333; font-size:16px;"><?php if($row_q8['speaker_name']=="Speech Opportunity Available") { echo "<font color='green'>".$row_q8['speaker_name']."</font>"; } else { echo @$row_q8['speaker_name']; } ?></strong></div>
<div style="padding-bottom:7px;"><strong style="font-weight:bold; color:#333; font-size:12px;"><?php echo $row_q8['speaker_affiliation']; ?></strong></div>
<div style="padding-bottom:7px;"><strong style="font-weight:bold; color:#333; font-size:12px;"><span style="color:#03C">Title:</span> <?php echo $row_q8['speaker_title']; ?></strong></div>
<div style="padding-bottom:7px; text-align:justify;"><?php if($row_q8['speaker_photo']!="") { ?><img src="../photos/<?php echo $row_q8['speaker_photo']; ?>" width="90" height="102" style="padding-right:5px; padding-bottom:5px; padding-top:5px;" align="left"><?php } ?><span style="color:#333; font-weight:bold">Biography:</span><br><?php echo $row_q8['biography']; ?>
<br><br>
<span style="color:#333; font-weight:bold">Abstract:</span><br>
<?php echo $row_q8['abstract']; ?> </div>
<div style="color:#03C; font-weight:bold; font-size:16px"><?php echo $row_q8['break']; ?></div>
<hr></hr>
<?php } } } }?>
<?php
				 $q1_csp = "select day,date,sid from scientific_programme where conference='".$_SESSION['sess_member']."' order by day ASC";
		         $csp_rs = mysql_query($q1_csp); 
				 $k=1;
		         while($row_q1 = mysql_fetch_assoc($csp_rs))
				 {
		         ?>	
                 <div style="float:left; padding-left:150px; margin-bottom:30px" class="rel"><a class="button-s" href="scientific-programme.php?day=<?php echo $row_q1['day']; ?>&sid=<?php echo $row_q1['sid']; ?>&date=<?php echo $row_q1['date']; ?>" title="Day : <?php echo $k; ?>"><?php echo "Day ".$k." : ".date('M-d-Y',strtotime($row_q1['date'])); ?></a></div>
				 <?php $k=$k+1;} ?>
                 <div class="clear"></div>
</article>
</td>
</tr>
</table>
</div>
</section>
<!-- Footer -->
</body>
</html>