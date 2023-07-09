<?php

include 'config/conn.php';

//Check if there's data to update
if (isset($_POST['fName'])){
    $fName = $_POST['fName'];

    $sql = "UPDATE user SET userFullName=".$fName." where userID=1";
    updateData($sql);
}

if (isset($_POST['phone'])){
    $phone = $_POST['phone'];

    $sql = "UPDATE user SET userPhone=".$phone." where userID=1";
    updateData($sql);
}

if (isset($_POST['email'])){
    $email = $_POST['email'];

    $sql = "UPDATE user SET userEmail=".$email." where userID=1";
    updateData($sql);
}

if (isset($_POST['state'])){
    $state = $_POST['state'];

    $sql = "UPDATE user SET userState=".$state." where userID=1";
    updateData($sql);
}

if (isset($_POST['city'])){
    $city = $_POST['city'];

    $sql = "UPDATE user SET userCity=".$city." where userID=1";
    updateData($sql);
}

header("Location: http://localhost/foobar/profile.php");

function updateData($sql){
;
    if ($conn->query($sql) === TRUE) {
    echo "Record updated";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: http://localhost/foobar/profile.php");
}


?>