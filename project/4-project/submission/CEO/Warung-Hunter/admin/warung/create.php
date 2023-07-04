<?php

session_start();

require_once "../../helpers/utils.php";
require_once "../../config/database.php";

if (!isset($_SESSION['is_admin'])) {
    header("Status: 404 Not Found");
    echo "<h1>404 File not found</h1>";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $address = $_POST['address'];
        $operationTime = $_POST['operation_time'];
        $location = $_POST['location'];
        $contactNo = $_POST['contact_no'];
        $website = $_POST['website'];
        $socialMedia = $_POST['social_media'];

        $stmt = $conn->prepare("INSERT INTO stalls (name,description,operation_time,location,contact_no,website,social_media,created_at,created_by_admin_id) VALUES (?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param(
            "ssssssssss",
            $name,
            $address,
            $description,
            $operationTime,
            $location,
            $contactNo,
            $website,
            $socialMedia
        );
        $stmt->execute();
        $stmt->close();

        $conn->close();

        echo "Warung Created.";
    } catch (PDOException $e) {
        $conn->close();
        echo "Error: " . $e->getMessage();
        exit();
    }
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
    Create
</body>

</html>