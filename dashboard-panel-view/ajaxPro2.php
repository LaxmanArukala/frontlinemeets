<?php
//update.php
require("inc/config.php");
//$page_id = $_POST["page_id_array"];
for($i=0; $i<count($_POST["page_id_array"]); $i++)
{
 $query = "
 UPDATE Speakers 
 SET position_order = '".$i."' 
 WHERE user = '".$_POST["page_id_array"][$i]."'";
 mysqli_query($con, $query);
}
echo 'Page Order has been updated'; 

?>