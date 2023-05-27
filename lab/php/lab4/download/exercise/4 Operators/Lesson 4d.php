<html>
<head><title>Lesson 4d: Comparison Operators</title><head>
<body>
<?php
//Assume variable A holds 42 and variable B holds 20 then:

    $a = 42;
    $b = 20;

    if( $a == $b ){
       echo "TEST1 : a is equal to b<br/>";
    }else{
       echo "TEST1 : a is not equal to b<br/>";
    }

    if( $a > $b ){
       echo "TEST2 : a is greater than  b<br/>";
    }else{
       echo "TEST2 : a is not greater than b<br/>";
    }
    if( $a < $b ){
       echo "TEST3 : a is less than  b<br/>";
    }else{
       echo "TEST3 : a is not less than b<br/>";
    }
    if( $a != $b ){
       echo "TEST4 : a is not equal to b<br/>";
    }else{
       echo "TEST4 : a is equal to b<br/>";
    }
    if( $a >= $b ){
       echo "TEST5 : a is either grater than or equal to b<br/>";
    }else{
       echo "TEST5 : a is nieghter greater than nor equal to b<br/>";
    }
    if( $a <= $b ){
       echo "TEST6 : a is either less than or equal to b<br/>";
    }else{
       echo "TEST6 : a is nieghter less than nor equal to b<br/>";
    }
?>
</body>
</html>