<?php
require('config.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have variables containing the data to be inserted
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare the SQL statement
    $sql = "INSERT INTO ContactUsTbl (Name, Email, Subject, Message) VALUES ('$name', '$email', '$subject', '$message')";

    // Execute the SQL statement
    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
