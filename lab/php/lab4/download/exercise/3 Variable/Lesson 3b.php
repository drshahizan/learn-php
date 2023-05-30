<!DOCTYPE html>
<html>
<head>
<title> Lesson 3b: PHP Variables Scope: Local & Global</title>
</head>

<?php
//The following example tests variables with local and global scope

//A variable declared outside a function and can only be accessed outside a function.
$x=5; // x,y - global scope variables
$y=100;

function myTest()//function myTest()
{
$x=1; // local scope variables
$y=10;
echo "<p>Test variables inside the function:<p>";
echo "Variable x is: $x";
echo "<br>";
echo "Variable y is: $y";
echo "<br>";
echo "Variable x and y is a local variable since it is created inside the function";
}

myTest();//call function

echo "<p>Test variables outside the function:<p>";
echo "Variable x is: $x"; //x-global scope variables
echo "<br>";
echo "Variable y is: $y";
echo "<br>";
echo "Variable x and y is a global variable since it is declared outside the function";
?>

</body>
</html>
