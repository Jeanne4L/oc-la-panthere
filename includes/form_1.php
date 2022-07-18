<?php	
	if(empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['acquisition_channel']) && strlen($_POST['acquisition_channel']) == 0 || empty($_POST['project_description']) && strlen($_POST['project_description']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$acquisitionChannel = $_POST['acquisition_channel'];
	$projectDescription = $_POST['project_description'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from your website";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nEmail: $email \nAcquisition_channel: $acquisitionChannel \nproject_description: $projectDescription \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $acquisitionChannel";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>