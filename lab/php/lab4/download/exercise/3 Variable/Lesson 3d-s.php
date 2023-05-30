<!DOCTYPE html>
<html>
<head>
<title> Lesson 3d: PHP Variables Scope: Global</title>
</head>

<body>
<!--
PHP also stores all global variables in an array called $GLOBALS[index].
The index holds the name of the variable. This array is also accessible
from within functions and can be used to update global variables directly.

The example Lesson 3c.php can be rewritten like this:
-->


<?php
$x=5;
$y=10;

function myTest()
{
//variable index
//$y=$x+$y;
}

myTest();
echo $y; //$y=$x+$y;
?>

</body>
</html>
