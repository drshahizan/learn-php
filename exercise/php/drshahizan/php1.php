<?php
// This PHP script will run on the server
# opening and closing tags necessary for writing php statements

# $_GET is a SUPER GLOBAL VARIABLE and an assoc array consisting of the form inputs
if (isset($_GET['username']) and isset($_GET['email'])) {
    $name = $_GET['username'];
    $email = $_GET['email'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise</title>
</head>

<body>
    <h2>Creating simple form to make use of PHP</h2>
    <!-- Creating simple form to make use of PHP -->
    <div style="margin: 10px; border: 2px solid black">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="GET">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="enter username">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="enter email">
            <button type="submit">Submit</button>
        </form>
    </div>
    <!-- This is alternative syntax for control structures -->
    <?php if (isset($name) and isset($email)): ?>
        <h3 style=" margin: 10px">
            <!-- php variables are accessible inside HTML once you open php tag -->
            Your name is <?php echo $name ?> and your email is <?php echo $email ?>, we will not share your info with
            anyone.
        </h3>
    <?php endif; ?>
</body>

</html>
