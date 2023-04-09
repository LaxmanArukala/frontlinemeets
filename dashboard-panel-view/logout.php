<?php
session_start();
$_SESSION['uname']="";
$_SESSION['pwd']="";
session_destroy();
header("location: index");
?>