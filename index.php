<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $email_from = 'test@test.com';

  $email_subject = "New Contact";

  $email_body = "Name: $name.\n".
                "Email: $email.\n".
                "Phone: $phone.\n".
                "User Message: $message.\n";

  $to = "drew_verwiel@outlook.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $email \r\n";

  mail($to,email_subject,$email_body,$headers);

  header("Location: index.html");


?>