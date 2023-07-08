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

// Assuming you have variables containing the data to be inserted
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$address = $_POST['address'];

// Prepare the SQL statement
$sql = "INSERT INTO NewMembership (name, email, gender, address) VALUES ('$name', '$email', '$gender', '$address')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close the database connection
$conn->close();
