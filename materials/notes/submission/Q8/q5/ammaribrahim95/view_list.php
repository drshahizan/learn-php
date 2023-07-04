<?php
// Include the database configuration file to establish the connection
require_once 'config.php';

// Query to retrieve all data from the ContactUsTbl table
$sql = "SELECT * FROM ContactUsTbl";

// Perform the query
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    // Check if there are any records in the result set
    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Contact Us Records</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Subject</th><th>Message</th></tr>";

        // Loop through the result set and display each record in a table row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "<td>" . $row['Subject'] . "</td>";
            echo "<td>" . $row['Message'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No records found.";
    }

    // Free the result set
    mysqli_free_result($result);
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
