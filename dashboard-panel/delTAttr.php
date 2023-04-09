<?php
ob_start();
session_start();
include("inc/config.php");
$userId=$_SESSION['sess_member'];
if(isset($_GET['Attrid'])){
	
	$Attrid=$_GET['Attrid'];
	mysqli_query($con,"delete from cityattractions_tblstr_d where id='$Attrid'");
	header('location:attractions.php');
}

if(isset($_GET['CityImg'])){
	
	$CityImg=$_GET['CityImg'];
	mysqli_query("delete from cityattractions_tblstr_d where sid='$CityImg'");
	header('location:editCityGuide.php');
}
?>