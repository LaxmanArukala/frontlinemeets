<?php
include('functions.php');
if ( ($_POST['name']!="") && ($_POST['email']!="")){
$name = $_POST['name'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$country = $_POST['country'];
$message = $_POST['message'];
 
$to = $r1['EmailId1'];

$subject = "Brochure has been downloaded";
$message = "<p><strong>Brochure has been downloaded by: </strong> $name .</p>
 <p><strong>Name: </strong>$name</p>
 <p><strong>Email: </strong>$email</p>
 <p><strong>Mobile Number: </strong>$phno</p>
<p><strong>Country: </strong>$country</p>
<p><strong>Query: </strong>$message</p>";
 
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <".$email.">" . "\r\n";
$sent = mail($to,$subject,$message,$headers); 
if($sent){
	echo "<span style='color:green; font-weight:bold;'>Your request has been submitted. Please <a href='download?download_file=".$pdf_row['Brochure']."'>click here to download brochure</a></span>";
  }

	 //echo "<span style='color:green; font-weight:bold;'>
	 //Thank you for contacting us, we will get back to you shortly <div class='sub'>Button</div>.
	 //</span>";

}
	else{
	echo "<span style='color:red; font-weight:bold;'>
	Sorry! Your form submission is failed.
	</span>";
	}
?>
