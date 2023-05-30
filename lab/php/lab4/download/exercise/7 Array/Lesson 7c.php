<html>
<head>
<title>Lesson 7c:Loop Through an Indexed Array</title>
</head>

<body>
<?php
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);

for($x=0;$x<$arrlength;$x++) 
{
   echo $cars[$x];
   echo "<br>";
}
?>

</body>
</html>
