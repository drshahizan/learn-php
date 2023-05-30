<!DOCTYPE html>
<html>
<head>
<title> Lesson 3h: PHP String</title>
</head>
<body>
 
<?php
//=== This is String Concatenation Operator ====
$txt1="Hello World";
$txt2="What a nice day!";
$txt3="1234";
echo $txt1 . " " . $txt2;
echo "<br>";
echo $txt1 . " " . $txt2. " " . $txt3;


/*=========This is the strlen() function =========================================
Let's find the length of our string "Hello world!"
=================================================================================*/
echo "<br>";
echo strlen("Hello world!");
echo "<br>";


/*=========This is the strpos() function ==========================================
The strpos() function is used to search for a character or a specific text within a string. 
Let's see if we can find the string "world" in our string "Hello world!"
===================================================================================*/
echo "<br>";
echo strpos("Hello world!","world");

/*
As you see the position of the string "world" in our string is position 6. 
The reason that it is 6, and not 7, is that the first position in the string is 0,
and not 1.
*/

?>
 
</body>
</html>