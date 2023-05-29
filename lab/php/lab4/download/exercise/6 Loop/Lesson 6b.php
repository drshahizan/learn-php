<html>
<head>
<title>Lesson 6b: The While Loop</title>

<body>
<?php
/*
========================================================================================
									The While Loop
								
The following example defines a loop that starts with i = 0. The loop will continue
to run as long as i is less than or equal to 5. i will increase by 1 each time the loop
runs.
========================================================================================
*/

$i=0;
while ($i<=5)
{
echo "The number is " + $i;
echo "<br />";
$i++;
}


echo "<p>Explanation:</p>";
echo "<p><b>i</b> is equal to 0.</p>";
echo "<p>While <b>i</b> is less than, or equal to, 5, the loop
will continue to run.</p>";
echo "<p><b>i</b> will increase by 1 each time the loop runs.</p>";

?>

</body>
</html>