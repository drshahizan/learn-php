<?php

include 'config/conn.php';

//Fetch data from form
$uname=$_POST['username'];
$pwd=$_POST['password'];

$sql = "SELECT userName, userPass from user";

$result = $conn->query($sql);
$counter = 1;

if ($result->num_rows > 0) {
    // Process the query result
    while ($row = $result->fetch_assoc()) {
        // Access individual columns of each row
        $dbUname = $row['userName'];
        $dbPwd = $row['userPass'];

        if ($uname == $dbUname){
            if($pwd == $dbPwd){
                print "Login Success";
                // Free the result set
                $result->free_result();
                $conn->close();
                header("Location: http://localhost/fooBar/profile.php");
            }
        }
        else{
            echo "No results found.";
            header("Location: http://127.0.0.1");
        }
        $counter++;
    }
} else {
    echo "No results found.";
}


?>