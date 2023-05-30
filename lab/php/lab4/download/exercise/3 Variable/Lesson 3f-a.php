<!DOCTYPE html>
<html>
<head>
<title> Lesson 3f-a: PHP Variables Scope: Functions Parameters Scope</title>
</head>

<body>

<?php
/*
PHP gives you option to pass your parameters inside a function. You can pass as many as parameters your like. These parameters work like variables inside your function. Following example takes two integer parameters and add them together and then print them.
*/

function addFunction($num1, $num2)// parameter function
{
  $sum = $num1 + $num2; //These parameters work like local variables (inside your function)
  echo "Sum of the two numbers is : $sum";
  //echo "<BR>"."Sum of the two numbers is : "."    ".$sum;
}
addFunction(10, 20); //caller addfunction and pass the value to parameter function
?>


</body>
</html>
