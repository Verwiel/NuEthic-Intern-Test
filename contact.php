Thanks for your message!

<?php
	
	$userName 		= $_POST['name'];
  $userEmail	 	= $_POST['email'];
  $userPhone    = $_POST['phone'];
  $userMessage 		= $_POST['message'];
  
	$to 			= "drew_verwiel@outlook.com";
  $subject 		= "Intern Test Contact Form Submission";
  
	$body 			= "Information Submitted:";
	$body .= "\r\n Name: " . $userName;
  $body .= "\r\n Email: " . $userEmail;
  $body .= "\r\n Phone Number: " . $userPhone;
	$body .= "\r\n Message: " . $userMessage;
	mail($to, $subject, $body);
?>

<!-- Would normally just use https://formspree.io/ -->