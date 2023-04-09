<?php
include("test.php");

mysql_select_db("fees0_9726138_omics", $con);
$ShortName=$_POST["ShortName"];
$Title=$_POST["Title"];
$Date=$_POST["Date"];
$Venue=$_POST["Venue"];
$Email=$_POST["Email"];


mysql_query("INSERT INTO conhome values('$ShortName','$Title','$Date','$Venue','$Email')");
echo "<SCRIPT LANGUAGE='JavaScript'>alert('Success');</SCRIPT>";
echo  $ShortName.$Title.$Date.$Venue.$Email;
?>