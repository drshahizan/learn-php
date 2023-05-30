<html>
<head><title>Lesson 4f: Logical Operators</title><head>
<body>
<?php
    
	$a = 42;
    $b = 0;
    
    if( $a && $b ){
       echo "TEST1 : Both a and b are true<br/>";
    }else{
       echo "TEST1 : Either a or b is false<br/>";
    }
    if( $a and $b ){
       echo "TEST2 : Both a and b are true<br/>";
    }else{
       echo "TEST2 : Either a or b is false<br/>";
    }
    if( $a || $b ){
       echo "TEST3 : Either a or b is true<br/>";
    }else{
       echo "TEST3 : Both a and b are false<br/>";
    }
    if( $a or $b ){
       echo "TEST4 : Either a or b is true<br/>";
    }else{
       echo "TEST4 : Both a and b are false<br/>";
    }
	
	
	
    $a = 10;
    $b = 20;
    
	if( $a ){
       echo "TEST5 : a is true <br/>";
    }else{
       echo "TEST5 : a  is false<br/>";
    }
    if( $b ){
       echo "TEST6 : b is true <br/>";
    }else{
       echo "TEST6 : b  is false<br/>";
    }
    if( !$a ){
       echo "TEST7 : a is true <br/>";
    }else{
       echo "TEST7 : a  is false<br/>";
    }
    if( !$b ){
       echo "TEST8 : b is true <br/>";
    }else{
       echo "TEST8 : b  is false<br/>";
    }
?>
</body>
</html>