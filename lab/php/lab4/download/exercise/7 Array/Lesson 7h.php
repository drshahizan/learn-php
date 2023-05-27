<html>
<head>
<title>Lesson 7h:asort(), ksort() function Array</title>
</head>

<body>

<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

asort($age);
//sorts an associative array in ascending order, according to the value.

/* =====================================================================
Now let try others Array Sorting function as below one by one.
========================================================================*/

ksort($age);
//sorts an associative array in ascending order, according to the keyname

//arsort($age);
//sorts an associative array in descending order, according to the value

//krsort($age);
//sorts an associative array in descending order, according to the keyname


foreach($age as $x=>$x_value)
    {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    }
?>

</body>
</html>
