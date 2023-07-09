<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $birthYear = $_POST['number'];
        $message = ($birthYear % 2 == 0) ? "Even" : "Odd";
    ?>
        <h2>Hello <?php echo $name; ?></h2>
        <p>Your birth year is an <b><?php echo $message; ?></b> number.</p>
    <?php
    } else {
    ?>
        <h2>Error: Form data is not submitted</h2>
        <p>Please turn back to the form and submit your name and birth year.</p>
    <?php
    }
    ?>
</body>

</html>