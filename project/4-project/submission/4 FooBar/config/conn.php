<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'project4';

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

//$conn->close();
?>