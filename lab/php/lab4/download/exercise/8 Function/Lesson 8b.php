<html>
<head>
<title>Lesson 8b:Writing PHP Function with Parameters</title>
</head>
<body>

<?php
/*
PHP gives you option to pass your parameters inside a function. You can pass as many as parameters your like. These parameters work like variables inside your function. Following example takes two integer parameters and add them together and then print them.
*/

/* Defining a PHP Function with parameters */
function addFunction($num1, $num2)
{
  $sum = $num1 + $num2;
  echo "Sum of the two numbers is : $sum";
}

/* Calling a PHP Function and pass a value to function parameters */
addFunction(10, 20);
?>
</body>
</html>