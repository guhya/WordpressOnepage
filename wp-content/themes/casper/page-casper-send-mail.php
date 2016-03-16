<?php
if(	empty($_POST["casper-name"])  		||
	empty($_POST["casper-email"]) 		||
	empty($_POST["casper-message"])		||
	!filter_var($_POST["casper-email"],FILTER_VALIDATE_EMAIL))
{
	echo "No arguments Provided!";
	return false;
}

$name 			= $_POST["casper-name"];
$email_address 	= $_POST["casper-email"];
$message 		= $_POST["casper-message"];

$to 			= "guhyawijaya@gmail.com"; 
$email_subject 	= "Website Contact Form:  $name";
$email_body 	= "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers 		= "From: noreply@guhya.net\n"; 
$headers 	   .= "Reply-To: $email_address";

mail($to,$email_subject,$email_body,$headers);
