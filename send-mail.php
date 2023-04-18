<?php
// Retrieve the form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Set the recipient email address
$to = 'info@frontlinemeets.org';

// Build the email message
$body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

// Set additional email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Send the email using the mail() function
echo mail($to, $subject, $body, $headers) ? 'success' : 'fail'
?>
