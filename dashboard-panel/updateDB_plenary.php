<?php
require("inc/config.php");
$action 				= $_POST['action'];
$updateRecordsArray 	= $_POST['recordsArray'];
if ($action == "updateRecordsListings"){
	$listingCounter = 1;
	foreach ($updateRecordsArray as $recordIDValue) {
		$query = "UPDATE plenary_speakers SET recordListingID = " . $listingCounter . " WHERE id = " . $recordIDValue;
		mysqli_query($con,$query);
		$listingCounter = $listingCounter + 1;
	}

	echo '<pre>';
	print_r($updateRecordsArray);
	echo '</pre>';
	echo 'If you refresh the page, you will see that records will stay just as you modified.';
}
?>