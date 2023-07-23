<?php
// db_config.php

// Database configuration
$host = "localhost"; // MySQL server host (e.g., localhost)
$username = "root"; // MySQL username (default: root)
$password = ""; // MySQL password (default: empty)
$database = "db_kuehraye"; // The name of the database you want to connect to

// Attempt to connect to the MySQL server
$link = mysqli_connect($host, $username, $password);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt to create the database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if (mysqli_query($link, $sql)) {
    error_log('Database created or already exists.<br>');
} else {
    error_log('ERROR: Could not create the database. ' . mysqli_error($link) . '<br>');
}

?>