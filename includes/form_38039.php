<?php	
	if (empty($_POST['name_6683_38039']) && strlen($_POST['name_6683_38039']) == 0 || empty($_POST['name_6683_38039']) && strlen($_POST['name_6683_38039']) == 0 || empty($_POST['email_6683_38039']) && strlen($_POST['email_6683_38039']) == 0)
	{
		return false;
	}
	
	$name_6683_38039 = $_POST['name_6683_38039'];
	$name_6683_38039 = $_POST['name_6683_38039'];
	$email_6683_38039 = $_POST['email_6683_38039'];
	$optin_6683_38039 = $_POST['optin_6683_38039'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_6683_38039: $name_6683_38039 \nName_6683_38039: $name_6683_38039 \nEmail_6683_38039: $email_6683_38039 \nOptin_6683_38039: $optin_6683_38039 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>