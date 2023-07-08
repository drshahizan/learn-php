<?php
require('config.php');

// Retrieve all data from the ContactUsTbl table
$sql = "SELECT * FROM ContactUsTbl";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row['ID'] . "<br>";
        echo "Name: " . $row['Name'] . "<br>";
        echo "Email: " . $row['Email'] . "<br>";
        echo "Subject: " . $row['Subject'] . "<br>";
        echo "Message: " . $row['Message'] . "<br>";
        echo "<br>";
    }
} else {
    echo "No records found";
}

// Close the database connection
mysqli_close($conn);
