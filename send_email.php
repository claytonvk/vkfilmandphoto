<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $to = 'your_email@example.com'; // Replace with your email address
  $subject = 'New Contact Form Submission';
  $body = "Name: $name\nEmail: $email\n\n$message";
  
  if (mail($to, $subject, $body)) {
    echo 'Email sent successfully';
  } else {
    echo 'Error sending email';
  }
}
?>