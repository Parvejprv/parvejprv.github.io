<?php

if($_SERVER["REQUEST"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
}

$to = "samrat081057+portfolio@gmail.com";
$subject = "New Contact Form Submission."
$body = "Name: $name\nEmail: $email\nMessage: $message";

$headers = "From: $email\r\n";
$headers = "Reply-To: $email\r\n";

if(mail($to, $subject, $body ,$headers)) {
  echo "Thank you for your message. It has been sent."
} else {
  echo "There was an error sending your message. Please try again later."
}

?>