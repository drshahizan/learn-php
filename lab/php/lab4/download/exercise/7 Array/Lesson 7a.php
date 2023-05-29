<html>
<head>
<title>Lesson 7a: Numeric or Indexed Array </title>
</head>

<body>

<?php
/*===== Following is the example showing how to create and access numeric arrays.======
        Here we have used array() function to create array.
======================================================================================*/

/* First method to create array. */
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";  //access numeric array
echo "<br />";

/* Second method to create array. */
$cars[0]="Volvo";
$cars[1]="BMW";
$cars[2]="Toyota";

foreach( $cars as $value ) //using foreach loop to access values
{
  echo "I like $value <br />";
}
?>

</body>
</html>
