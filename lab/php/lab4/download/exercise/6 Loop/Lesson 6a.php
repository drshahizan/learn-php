<html>
<head>
<title>Lesson 6a: The for Loop </title>
</head>

<body>

<?php
/*
========================================================================================
									The for Loop
								
The following example defines a loop that starts with i = 0. The loop will continue
to run as long as i is less than or equal to 5. i will increase by 1 each time the loop
runs
========================================================================================
*/

for ($i = 0; $i <= 5; $i++)
{
echo "The number is " + $i;
echo "<br />";
}

echo "<p>Explanation:</p>";
echo "<p>This for loop starts with i=0.</p>";
echo "<p>As long as <b>i</b> is less than, or equal to 5, the loop
will continue to run.</p>";
echo "<p><b>i</b> will increase by 1 each time the loop runs.</p>";

?>

</body>
</html>
