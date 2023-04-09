<?php
ob_start();
session_start();
include('inc/config.php');

if(!isset($_SESSION['cname']))
{
	header('location:index');
}

/*if(isset($_POST)){
if ( isset( $_POST ) )
	$postArray = $_POST['editor1'] ;			// 4.1.0 or later, use $_POST
else
	$postArray = &$HTTP_POST_VARS ;	// prior to 4.1.0, use HTTP_POST_VARS

foreach ( $postArray as $sForm => $value )
{
	if ( get_magic_quotes_gpc() )
		$postedValue = htmlspecialchars( stripslashes( $value ) ) ;
	else
		$postedValue = htmlspecialchars( $value ) ;


}*/
	$value=mysqli_real_escape_string($con,$_POST['editor1']);
	$result1 = mysqli_query($con,"select * from venue_hospitality_tblstr_d where id='".$_SESSION['sess_member']."'");
	$row = mysqli_fetch_array($result1);
	$num_rows = mysqli_num_rows($result1);
	if($num_rows>0)
	{
		$res=mysqli_query($con,"UPDATE venue_hospitality_tblstr_d set map='".$_POST['map']."',venue_content='$value' where id='".$_SESSION['sess_member']."'") or die(mysqli_error());
		
		$uploaddir = "../uploads/photos/";
		$pic1name1 = $_FILES['venue_image1']['name'];
		if($pic1name1 != "")
		{
				$pic1arr1 = explode(".",$pic1name1);
				$pic1new1 = $_SESSION['sess_member']."-venue_image1.".$pic1arr1[count($pic1arr1)-1];
				move_uploaded_file($_FILES['venue_image1']['tmp_name'], $uploaddir.$pic1new1);
				$sqlqq="update venue_hospitality_tblstr_d set venue_image1='$pic1new1',image_title1='".$_POST['image_name1']."' where id='".$_SESSION['sess_member']."'";
				$resqq=mysqli_query($sqlqq) or die(mysqli_error());					
		}
		$pic1name2 = $_FILES['venue_image2']['name'];
		if($pic1name2 != "")
		{
				$pic1arr2 = explode(".",$pic1name2);
				$pic1new2 = $_SESSION['sess_member']."-venue_image2.".$pic1arr2[count($pic1arr2)-1];
				move_uploaded_file($_FILES['venue_image2']['tmp_name'], $uploaddir.$pic1new2);
				$sqlqq="update venue_hospitality_tblstr_d set venue_image2='$pic1new2',image_title2='".$_POST['image_name2']."' where id='".$_SESSION['sess_member']."'";
				$resqq=mysqli_query($con,$sqlqq) or die(mysqli_error());					
		}
		$pic1name3 = $_FILES['venue_image3']['name'];
		if($pic1name3 != "")
		{
				$pic1arr3 = explode(".",$pic1name3);
				$pic1new3 = $_SESSION['sess_member']."-venue_image3.".$pic1arr3[count($pic1arr3)-1];
				move_uploaded_file($_FILES['venue_image3']['tmp_name'], $uploaddir.$pic1new3);
				$sqlqq="update venue_hospitality_tblstr_d set venue_image3='$pic1new3',image_title3='".$_POST['image_name3']."' where id='".$_SESSION['sess_member']."'";
				$resqq=mysqli_query($con,$sqlqq) or die(mysqli_error());					
		}
		if($res)
		{
			header('location:venue-hospitality');
		}
	}
	else
	{
		$ins=mysqli_query($con,"INSERT INTO venue_hospitality_tblstr_d(id,map,venue_content) values('".$_SESSION['sess_member']."','".$_POST['map']."','$value')") or die(mysqli_error());
		
		$uploaddir = "../uploads/photos/";
		$pic1name1 = $_FILES['venue_image1']['name'];
		if($pic1name1 != "")
		{
				$pic1arr1 = explode(".",$pic1name1);
				$pic1new1 = $_SESSION['sess_member']."-venue_image1.".$pic1arr1[count($pic1arr1)-1];
				move_uploaded_file($_FILES['venue_image1']['tmp_name'], $uploaddir.$pic1new1);
				$sqlqq="update venue_hospitality_tblstr_d set venue_image1='$pic1new1',image_title1='".$_POST['image_name1']."' where id='".$_SESSION['sess_member']."'";
				$resqq=mysqli_query($con,$sqlqq) or die(mysqli_error());					
		}
		$pic1name2 = $_FILES['venue_image2']['name'];
		if($pic1name2 != "")
		{
				$pic1arr2 = explode(".",$pic1name2);
				$pic1new2 = $_SESSION['sess_member']."-venue_image2.".$pic1arr2[count($pic1arr2)-1];
				move_uploaded_file($_FILES['venue_image2']['tmp_name'], $uploaddir.$pic1new2);
				$sqlqq="update venue_hospitality_tblstr_d set venue_image2='$pic1new2',image_title2='".$_POST['image_name2']."' where id='".$_SESSION['sess_member']."'";
				$resqq=mysqli_query($con,$sqlqq) or die(mysqli_error());					
		}
		$pic1name3 = $_FILES['venue_image3']['name'];
		if($pic1name3 != "")
		{
				$pic1arr3 = explode(".",$pic1name3);
				$pic1new3 = $_SESSION['sess_member']."-venue_image3.".$pic1arr3[count($pic1arr3)-1];
				move_uploaded_file($_FILES['venue_image3']['tmp_name'], $uploaddir.$pic1new3);
				$sqlqq="update venue_hospitality_tblstr_d set venue_image3='$pic1new3',image_title3='".$_POST['image_name3']."' where id='".$_SESSION['sess_member']."'";
				$resqq=mysqli_query($con,$sqlqq) or die(mysqli_error());					
		}
		if($ins)
		{
			header('location:venue-hospitality');
		}
	}
?>