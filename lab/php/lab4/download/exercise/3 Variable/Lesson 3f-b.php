<!DOCTYPE html>
<html>
<head>
<title> Lesson 3f-b: PHP Variables Scope: Functions Parameters Scope</title>
</head>

<body>

<?php
// function ()
// multiply a value by 10 and return it to the caller
function multiply ($value) {//recive value 10 as $value parameter
    $value = $value * 10;
    return $value;
}

$retval = multiply (10);//Calling function () with passing value 10.
Print "Return value is : $retval\n";
?>


</body>
</html>
