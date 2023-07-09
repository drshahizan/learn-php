<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $birthYear = $_POST["number"];
    
    // Determine if the birth year is odd or even
    $isEven = ($birthYear % 2 == 0);
    
    // Generate the greeting message
    $message = "Hello " . $name . "<br>";
    $message .= "Your birth year is an " . ($isEven ? "Even" : "Odd") . " number.";
    
    // Display the greeting message
    echo "<h2>" . $message . "</h2>";
}
?>
</body>
</html>
