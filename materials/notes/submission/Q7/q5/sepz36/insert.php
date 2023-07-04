INSERT INTO NewMembership (name, email, membership_type)
VALUES ('John Doe', 'johndoe@example.com', 'Gold');

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

// Check if the form is submitted (assuming the form has a submit button with name "submit")
if (isset($_POST['submit'])) {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $membership_type = $_POST['membership_type'];

    // Construct the SQL INSERT statement
    $sql = "INSERT INTO NewMembership (name, email, membership_type) VALUES ('$name', '$email', '$membership_type')";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
