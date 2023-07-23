<?php
// Start the session
session_start();

// Clear all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect the user back to the login page or any desired page
header('Location: login.php'); // Change "login.php" to the login page or any other page
exit;
?>
