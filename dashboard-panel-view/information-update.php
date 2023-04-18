<?php
ob_start();
session_start();
include('inc/config.php');

if(!isset($_SESSION['cname']))
{
	header('location:index');
}
if(isset($_POST)){
if ( isset( $_POST ) )
	$postArray = &$_POST ;			// 4.1.0 or later, use $_POST
else
	$postArray = &$HTTP_POST_VARS ;	// prior to 4.1.0, use HTTP_POST_VARS

foreach ( $postArray as $sForm => $value )
{
	if ( get_magic_quotes_gpc() )
		$postedValue = htmlspecialchars( stripslashes( $value ) ) ;
	else
		$postedValue = htmlspecialchars( $value ) ;


}
	$result1 = mysqli_query($con,"select home from important_informations where id='".$_SESSION['sess_member']."'");
	$row = mysqli_fetch_array($result1);
	$num_rows = mysqli_num_rows($result1);
	if($num_rows>0)
	{
		$res=mysqli_query($con,"UPDATE important_informations set home='$value' where id='".$_SESSION['sess_member']."'") or die(mysqli_error($con));
		if($res)
		{
			header('location:about');
		}
	}
	else
	{
		$ins=mysqli_query($con,"INSERT INTO important_informations(home,id) values('$value','".$_SESSION['sess_member']."')") or die(mysqli_error($con));
		if($ins)
		{
			header('location:about');
		}
	}
?>
<?php

}

?>