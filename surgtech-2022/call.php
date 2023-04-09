<?php
$id=10;
include("inc/config.php");

$important_details =mysqli_query($con1,"select * from important_details_tblstr_d where id='$id'");
$r1 = mysqli_fetch_array($important_details);
$Conf_mailid=$r1['EmailId1'];
 if (strpos($r1['ConferenceTitle'], '<br>') == true) 
{
	$main_title = explode("<br>", $r1['ConferenceTitle']);
	$conf_title = $main_title[0]." ".$main_title[1];
}
else
{
	$conf_title = $r1['ConferenceTitle'];
}

$conf_title = str_replace("<sup>", "", $conf_title);
$conf_title = str_replace("</sup>", "", $conf_title);

$f_half = mysqli_query($con1,"select * from topics_tblstr_d where user='$id' `status`='1' AND  track_id % 3 = 0 order by track_id ASC");

$sessions=mysqli_query($con1,"select * from topics_tblstr_d where user='$id' order by track_id ASC");

$r2 = mysqli_fetch_array($sessions);
$session_rows = mysqli_num_rows($sessions);
$segment = ($session_rows/2);
$first_half = round($segment);
$second_half = (2*$first_half);
$third_half = $session_rows;


$login_details=mysqli_query($con1,"select * from login_details_tblstr_d where id='$id'");
$r3 = mysqli_fetch_array($login_details);

$about = mysqli_query($con1,"select * from homepage_tblstr_d where id='$id'");
$r4 = mysqli_fetch_array($about);

$pdfs=mysqli_query($con1,"select * from pdfs_tblstr_d where id='$id'");
$pdf_row=mysqli_fetch_array($pdfs);

/*$conferences=mysqli_query($con1,"select * from conferences_tblstr_d where user='$id'");
$conferences_row=mysqli_fetch_array($conferences);

$conferences_pre=mysqli_query($con1,"select * from conferences_pre_tblstr_d where user='$id'");
$conferences_pre_row=mysqli_fetch_array($conferences_pre);*/

$pages=mysqli_query($con1,"select * from pages_tblstr_d where id='$id'");
$pages_row=mysqli_fetch_array($pages);

$venue_hospitality=mysqli_query($con1,"select * from venue_hospitality_tblstr_d where id='$id'");
$venue_hospitality_row=mysqli_fetch_array($venue_hospitality);

$media = "select *from media_partners_tblstr_d where user='$id'";
$media_result = mysqli_query($con1,$media);

$meta=mysqli_query($con1,"select * from conff_meta_tags_tblstr_d where user='$id'");
$row_meta=mysqli_fetch_assoc($meta); 
?>