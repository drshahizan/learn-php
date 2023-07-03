<?php

require_once 'config/database.php';

// Handle registration form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "SELECT * FROM users WHERE username LIKE '%$username%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) !== 0) {
        echo "Username {$username} already used";
    } else {
        // Insert user into the database
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if (mysqli_query($conn, $sql)) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
</head>

<body>
    <h1>Registration</h1>
    <form method="POST" action="register.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Register">
    </form>
</body>

</html>