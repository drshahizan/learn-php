<?php
// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'warung_hunter';

// Connect to the database
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
