
<html>
<head><title>Lesson 5c: Conditional Statement(if else if statement) </title><head>
<body>

<?php

$book = "maths";
if( $book == "history" )
{
	echo"<b>History Book</b>";
}
else if( $book == "maths" )
{
   echo"<b>Maths Book</b>";
}
else if( $book == "economics" )
{
   echo"<b>Economics Book</b>";
}
else
{
  echo"<b>Unknown Book</b>";
}

?>
 
</body>
</html>