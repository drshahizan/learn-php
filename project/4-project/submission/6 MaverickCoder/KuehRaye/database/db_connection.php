<?php

// db_connection.php

// Database configuration
$host = "localhost"; // MySQL server host (e.g., localhost)
$username = "root"; // MySQL username (default: root)
$password = ""; // MySQL password (default: empty)
$database = "db_kuehraye"; // The name of the database you want to connect to

// Attempt to connect to the MySQL server
$link = mysqli_connect($host, $username, $password, $database);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
