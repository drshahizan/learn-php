<?php
$host = 'localhost';
$username = 'admin_persaka';
$password = 'Pers@ka';
$database = 'Persaka';

$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

$conn->close();
?>
