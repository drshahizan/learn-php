<html>
<head><title>Lesson 5d: Conditional Statement(Switch statement) </title><head>
<body>

<?php
$grade= "A";
switch ($grade)
{
  case 'A': echo "Good job<br />";
            break;
//			case 'A':case 'a':  document.write("Good job<br />");
  case 'B': echo "Pretty good<br />";
            break;
  case 'C': echo "Passed<br />";
            break;
  case 'D': echo "Not so good<br />";
            break;
  case 'F': echo "Failed<br />";
            break;
  default:  echo "Unknown grade<br />";
}
?>
 
</body>
</html>