<?php

session_start();

require_once "../../helpers/utils.php";
require_once "../../config/database.php";

if (!isset($_SESSION['is_admin'])) {
    header("Status: 404 Not Found");
    echo "<h1>404 Not found</h1>";
    exit();
}

$data = [];

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    try {
        $sql = "SELECT * FROM stalls WHERE id = '$id'";
        $result = $conn->query($sql);

        if ($result->num_rows === 1) {
            $data = mysqli_fetch_assoc($result);

            dd($data);
        } else {
            header("Status: 404 Not Found");
            echo "<h1>404 Not found</h1>";
            exit();
        }

        mysqli_close($conn);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        exit();
    }
} else {
    echo "Not Found.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // $sql = "SELECT * FROM stalls WHERE id = "
        // $result = 
    } catch (Exception $e) {
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
    Edit
</body>

</html>