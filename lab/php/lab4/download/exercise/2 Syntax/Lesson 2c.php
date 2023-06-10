<!DOCTYPE html>
<html>
<head>
<title> Lesson 2c: PHP Case Sensitivity</title>
</head>
<body>

<?php
//all user-defined functions, classes, and keywords are NOT case-sensitive 
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";

echo "<br>";

#However; all variables are case-sensitive.
/*In the example below, only the first statement will display 
the value of the $color variable (this is because $color, $COLOR, 
and $coLOR are treated as three different variables)
*/

$color="red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?> 
 
</body>
</html>