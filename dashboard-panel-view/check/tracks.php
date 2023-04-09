<?php

$q=$_GET["q"];
$i=1;
echo "<table cellpadding='0' cellspacing='6' width='700'>";
while($q>0){

echo "
	<tbody>
		<tr>
			<td bgcolor='#555555' class='heading' colspan='2' height='22px;' style='padding-left:6px;'>
				<strong><span style='color:#fff0f5;'>Track ";
echo $i." :";
echo " Track Name</span></strong></td>
		</tr>";
echo "<tr>
			<td bgcolor='#f5f5f5' class='smalltext' height='18px;' width='76'>&nbsp; Track ".$i."- </td>
			<td bgcolor='#f5f5f5' class='smalltext' width='604'>&nbsp;</td>
		</tr>
	</tbody>";
$i++;
$q--;
}
echo "</table>";
?>