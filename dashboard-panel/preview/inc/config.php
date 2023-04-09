<?php
 $chandle = mysql_connect("localhost", "sfg_conference","sfg@123"); 
 if(!$chandle){die("Could not connect to MySQL");}
mysql_select_db("admin",$chandle) or die ("could not open db".mysql_error()); 
?>


