<?php
ob_start();
session_start();
include("inc/config.php"); // Using database connection file here

if($_SESSION['sess_member']=="")
{
	header('location:index.php');
}
@$mem_id = @$_SESSION['sess_member']; 
@$track_id = @$_GET['track_id'];

$del = mysqli_query($con,"delete from topics_tblstr_d where track_id = '$track_id'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:topics.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>