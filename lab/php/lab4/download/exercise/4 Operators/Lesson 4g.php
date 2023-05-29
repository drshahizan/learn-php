<html>
<head><title>Lesson 4g: Conditional Operators</title><head>
<body>

<?php
    $a = 10;
    $b = 20;
    
    /* If condition is true then assign a to result otheriwse b */
    $result = ($a > $b ) ? $a :$b; //if condition true, then value X, otherwise Y
    echo "TEST1 : Value of result is $result<br/>";
    /* If condition is true then assign a to result otheriwse b */
    $result = ($a < $b ) ? $a :$b;
    echo "TEST2 : Value of result is $result<br/>";
?>
</body>
</html>