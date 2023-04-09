<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("test.php");


?>
<?php
/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>OMICS Group</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="sample.css" />
</head>
<body>

	<table border="0" cellspacing="0">
		<colgroup><col width="100" /></colgroup>
		
<?php

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

?>
		<tr>
			
			<td><pre class="samples"></pre></td>
		</tr>
	<?php
}
?>
	</table>
	<div style="background-color:#FFFFFF" align="center">
	<?php //echo $value;
	
	mysql_query("UPDATE homepage set home='$value' where conference='BABE2013'");

$result1 = mysql_query("select home from homepage where conference='BABE2013'");
while($row = mysql_fetch_array($result1)){
echo $row['home'];
}
	?>
	</div>
	
</body>
</html>
