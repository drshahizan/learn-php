<html>
<head>
<title>Lesson 7f:Multidimensional Array</title>
</head>

<body>
<?php
/*=================================================================================================
In this example we create a two dimensional array to store marks of three students in three subjects.
This example is an associative array, you can create numeric array in the same fashion.
==================================================================================================*/

$marks = array
		(
		"mohammad" => array
				(
				"physics" => 35,
				"maths" => 30,
				"chemistry" => 39
				),

		
		"qadir" => array
                (
                "physics" => 30,
                "maths" => 32,
                "chemistry" => 29
                ),


    "zara" => array
                (
                "physics" => 31,
                "maths" => 22,
                "chemistry" => 39
                )
	     );

   /* Accessing multi-dimensional array values */
   echo "Marks for mohammad in physics : " ;
   echo $marks['mohammad']['physics'] . "<br />";
   echo "Marks for qadir in maths : ";
   echo $marks['qadir']['maths'] . "<br />";
   echo "Marks for zara in chemistry : " ;
   echo $marks['zara']['chemistry'] . "<br />";
?>
</body>
</html>
