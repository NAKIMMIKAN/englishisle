<?php	
	if (empty($_POST['name_6683']) && strlen($_POST['name_6683']) == 0 || empty($_POST['name_6683']) && strlen($_POST['name_6683']) == 0 || empty($_POST['email_6683']) && strlen($_POST['email_6683']) == 0)
	{
		return false;
	}
	
	$name_6683 = $_POST['name_6683'];
	$name_6683 = $_POST['name_6683'];
	$email_6683 = $_POST['email_6683'];
	$optin_6683 = $_POST['optin_6683'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_6683: $name_6683 \nName_6683: $name_6683 \nEmail_6683: $email_6683 \nOptin_6683: $optin_6683 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>