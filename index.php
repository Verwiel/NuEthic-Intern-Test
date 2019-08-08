<?php 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $formcontent="From: $name \n 
                Phone Number: $phone \n 
                Message: $message";

  $recipient = "drew_verwiel@outlook.com";
  $subject = "Contact Form";

  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  echo "Thank You!";
?>