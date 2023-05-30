<html>
<head>
<title>Lesson 8c: Writing PHP Function which returns value</title>
</head>
<body>

<?php
/*
The following example takes two integer parameters and add them together and then returns their sum to the calling program.
Note that return keyword is used to return a value from a function.
*/

function addFunction($num1, $num2)
{
  $sum = $num1 + $num2;
  return $sum; //Function which returns value
}

/* Calling a PHP Function and pass a value to function parameters, then returns their sum to the calling program.*/
echo "10 + 20 = " . addFunction(10,20); 
?>
</body>
</html>