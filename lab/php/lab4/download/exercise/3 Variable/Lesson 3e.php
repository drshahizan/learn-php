<!DOCTYPE html>
<html>
<head>
<title> Lesson 3e: PHP Variables Scope: Static</title>
</head>

<body>

<?php

function myTest()
{
static $x=0; //static scope variable. Try to remove keyword "static", left only "$x=0;" and see the result
echo $x;
$x++;
}

myTest(); //1st call, x=0, print x=0, then x++ now x hold 1
echo "<br>";

myTest(); //2nd time call, x=1
echo "<br>";

myTest();
echo "<br>";

myTest();
echo "<br>";

myTest();
echo "<br>";

echo "<br>";
echo "Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.";

echo "<br>";
echo "<br>";
echo "Note: The variable is still local to the function.";
?>

</body>
</html>
