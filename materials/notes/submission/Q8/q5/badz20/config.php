<?php
$host = "localhost";
$username = "admin";
$password = "SCSV1223";
$database = "FinalAssignmentDb";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
