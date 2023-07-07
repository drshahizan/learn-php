<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Validate form data (you can add your own validation logic here)

    // Set recipient email address
    $to = "harismazlan89@gmail.com"; // Replace with your desired recipient email address

    // Set email headers
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8" . "\r\n";

    // Compose email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message: $message\n";

    // Send email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Error sending email.";
    }
} else {
    echo "Invalid request.";
}
?>