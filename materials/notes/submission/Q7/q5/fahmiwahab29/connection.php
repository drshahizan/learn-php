<?php
$host = "localhost";
$username = "admin_persaka";
$password = "Pers@ka";
$database = "Persaka";

// Create a connection to the database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If the connection is successful, you can perform database operations here.

// Close the database connection when you're done.
$conn->close();
?>