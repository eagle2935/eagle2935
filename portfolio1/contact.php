<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $to = "e2935985665@gmail.com";
  $subject = "New message from $name";
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";
  
  if (mail(to: $to, subject: $subject, message: $body)) {
    echo "Message sent successfully.";
  } else {
    echo "Failed to send message.";
  }
}
?>
