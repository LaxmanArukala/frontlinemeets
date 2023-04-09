<?php
$con = mysql_connect("mysqlv111","conferences_cms","Omics2013");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("conferences_cms", $con);

?> 