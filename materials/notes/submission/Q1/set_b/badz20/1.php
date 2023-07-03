<?php

$sql = "DELETE FROM users WHERE id = 1";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "User deleted successfully.";
} else {
    echo "Error deleting user.";
}
