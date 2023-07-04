<?php
// Include the database configuration file to establish the connection
require_once 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare the INSERT query
    $sql = "INSERT INTO ContactUsTbl (Name, Email, Subject, Message) VALUES (?, ?, ?, ?)";

    // Prepare the statement
    $stmt = mysqli_stmt_init($conn);

    // Check if the statement is prepared successfully
    if (mysqli_stmt_prepare($stmt, $sql)) {
        // Bind the parameters to the statement
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $subject, $message);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            // Insert successful
            echo "Data inserted successfully.";
        } else {
            // Insert failed
            echo "Error: " . mysqli_stmt_error($stmt);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        // Statement preparation failed
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Contact Us Form</title>
</head>
<body>
  <h2>Contact Us</h2>
  <form action="insert.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" required><br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" required><br><br>
    <label for="subject">Subject:</label>
    <input type="text" name="subject" required><br><br>
    <label for="message">Message:</label>
    <textarea name="message" required></textarea><br><br>
    <input type="submit" value="SUBMIT">
  </form>
</body>
</html>
