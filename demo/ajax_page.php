<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo $_POST['value'];
    $total = $_POST['value']*0.035;
	$final= $_POST['value']+$total;
	echo $final;
} else {
    echo "Nothing to Show";
}
?>