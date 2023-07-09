<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Set up the email recipient and headers
  $to = "your-email@example.com";
  $headers = "From: $email" . "\r\n" .
             "Reply-To: $email" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  // Compose the email message
  $email_body = "Name: $name\n\n";
  $email_body .= "Email: $email\n\n";
  $email_body .= "Subject: $subject\n\n";
  $email_body .= "Message:\n$message\n";

  // Send the email
  $success = mail($to, $subject, $email_body, $headers);

  if ($success) {
    echo "Thank you for contacting us!";
  } else {
    echo "Oops! An error occurred. Please try again later.";
  }
}
?>
