<?php

require("inc/config.php");
 

$position = $_POST['position'];


$i=1;
foreach($position as $k=>$v){
    $sql = "Update Speakers_tblstr_d SET position_order=".$i." WHERE id=".$v;
	$result =  mysqli_query($con,$sql);	
	
	$i++;
}


?>