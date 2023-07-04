<?php
// Database configuration
$host = "localhost";
$username = "admin";
$password = "SCSV1223";
$database = "FinalAssignmentDb";

// Attempt to connect to the database
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection status
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
