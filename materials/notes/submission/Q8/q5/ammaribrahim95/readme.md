# Question 5[SET1] [20 Marks]
### Answer all the questions 5. The marks for each part of the question is as indicated. Type and compile your amswer in the template answer sheet given.

#### Based on the Contact Us Form given, kindly answer all questions below.
#### (a) Referring to the given connection information to MySQL database account below,construct the PHP codes needed in config.php file to open a database connection.
**PHP: config.php**
```php
<?php
// Database configuration
$host = "localhost";
$username = "admin";
$password = "SCSV1223";
$database = "FinalAssignmentDb";

// Attempt to connect to the database
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection status
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

```

#### (b) The FinalAssignmentDb database consist of table namely ContactUsTbl. The attribute of the table shown as below and assume that the ID field is set as primary key and auto_increment. Using the database connection in Question 5(a), construct the PHP codes to call config.php for example in the insert.php file in order to open a database connection before perfomed the insert data.
**PHP: insert.php**
```php
<?php
// Include the database configuration file to establish the connection
require_once 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare the INSERT query
    $sql = "INSERT INTO ContactUsTbl (Name, Email, Subject, Message) VALUES (?, ?, ?, ?)";

    // Prepare the statement
    $stmt = mysqli_stmt_init($conn);

    // Check if the statement is prepared successfully
    if (mysqli_stmt_prepare($stmt, $sql)) {
        // Bind the parameters to the statement
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $subject, $message);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            // Insert successful
            echo "Data inserted successfully.";
        } else {
            // Insert failed
            echo "Error: " . mysqli_stmt_error($stmt);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        // Statement preparation failed
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>

```


#### (c) Once database connection in Question 5b(i) is success. Now, construct the PHP codes needed in insert.php file to insert data into the ContactUsTbl table once user click button “SUBMIT” in Figure 1.
```php
<?php
// Include the database configuration file to establish the connection
require_once 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Prepare the INSERT query
    $sql = "INSERT INTO ContactUsTbl (Name, Email, Subject, Message) VALUES (?, ?, ?, ?)";

    // Prepare the statement
    $stmt = mysqli_stmt_init($conn);

    // Check if the statement is prepared successfully
    if (mysqli_stmt_prepare($stmt, $sql)) {
        // Bind the parameters to the statement
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $subject, $message);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            // Insert successful
            echo "Data inserted successfully.";
        } else {
            // Insert failed
            echo "Error: " . mysqli_stmt_error($stmt);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        // Statement preparation failed
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Contact Us Form</title>
</head>
<body>
  <h2>Contact Us</h2>
  <form action="insert.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" required><br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" required><br><br>
    <label for="subject">Subject:</label>
    <input type="text" name="subject" required><br><br>
    <label for="message">Message:</label>
    <textarea name="message" required></textarea><br><br>
    <input type="submit" value="SUBMIT">
  </form>
</body>
</html>

```

#### (d) Construct the PHP codes using a while loop needed in view_list.php file to retrieve all the data from ContactUsTbl table and view all the record in the browser as shown in the Figure 2.
