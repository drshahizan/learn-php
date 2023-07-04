<?php

session_start();

if (!isset($_SESSION['is_admin'])) {
    header("Status: 404 Not Found");
    echo "<h1>404 File not found</h1>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Dashboard
</body>

</html>