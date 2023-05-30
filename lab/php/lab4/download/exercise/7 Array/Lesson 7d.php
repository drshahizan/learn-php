<html>
<head>
<title>Lesson 7d:Associate array or Hash Array</title>
</head>
<body>

<?php
// First method to associate create array.
$age=array(
		   "Peter"=>"35",
		   "Ben"=>"37",
		   "Joe"=>"43"
		   );
		   
// access to associate array.
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br />";

echo "Ben is " . $age['Ben'] . " years old.";
echo "<br />";

echo "Joe is " . $age['Joe'] . " years old.";
echo "<br />";


// second method to associate create array.
$age['Peter']="35";
$age['Ben']="37";
$age['Joe']="43";

// access to associate array.	   
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br />";

echo "Ben is " . $age['Ben'] . " years old.";
echo "<br />";

echo "Joe is " . $age['Joe'] . " years old.";
?>

</body>
</html>