<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $instagram = $_POST['instagram'];
  $heard = $_POST['heard'];
  $package = $_POST['package'];
  $location = $_POST['location'];
  $who = $_POST['who'];
  $date = $_POST['date'];
  $etc = $_POST['etc'];
  
  // $body = "Name: $name\nEmail: $email\nPhone #: $phone\nInstagram Handle: $instagram\n\nHow did you hear about me? $heard\nWhich package are you interested in? $package\nWho will be in the photos? $who\nDate: $date\nAnything else? $etc";
  
  // echo "<pre>$body</pre>";

  $to = 'vkfilmandphotostudios@gmail.com'; // Replace with your email address
  $subject = 'New Contact Form Submission';
  $body = "Name: $name\nEmail: $email\nPhone #: $phone\nInstagram Handle: $instagram\n
  How did you hear about me? $heard\nWhich package are you interested in? $package
  \nLocation: $location\nWho will be in the photos? $who\nDate: $date\nAnything else? $etc";

  
if (mail($to, $subject, $body)) {
  echo 'Email sent successfully';
  echo '<script>setTimeout(function() { window.location.href = "index.html"; }, 3000);</script>';
} else {
  echo 'Error sending email';
  echo '<script>setTimeout(function() { window.location.href = "index.html"; }, 3000);</script>';
}

  

}



?>


