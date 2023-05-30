<html>
<head>
<title>Lesson 7g:Sort(), rsort() function Array</title>
</head>

<body>

<?php

//==========================Example 1: $cars array =============================================

$cars=array("Volvo","BMW","Toyota");

sort($cars); 
//sorts the elements of the $cars array in ascending alphabetical order

rsort($cars); 
//sorts the elements of the $cars array in descending alphabetical order

$clength=count($cars);  //count array elements
for($x=0;$x<$clength;$x++)  //loop the array
   {
   echo $cars[$x]; //then print out
   echo "<br>";
   }
   
   
   
//===========================Example 2: numbers array =========================================
echo "<br>";
  
$numbers=array(4,6,2,22,11);

sort($numbers);
//sorts the elements of the $numbers array in ascending numerical order

rsort($numbers);
//sorts the elements of the $numbers array in descending numerical order

$arrlength=count($numbers);
for($x=0;$x<$arrlength;$x++)
   {
   echo $numbers[$x];
   echo "<br>";
   }
   
   
?>

</body>
</html>