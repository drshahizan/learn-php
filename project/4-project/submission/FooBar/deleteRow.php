<?php

include 'config/conn.php';

//Fetch data from URL
$uid=$_GET['id'];
$phone=$_GET['phone'];

$sql = "DELETE from message WHERE id=".$uid." AND phone='".$phone."';";
print $sql."\n\n\n";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: http://localhost");
?>