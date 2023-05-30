<html>
<head>
<title>Lesson 6c:The do....While Loop</title>

<body>
<?php

/*
========================================================================================
									The do....While Loop
								
The following example uses a do...while loop. The do...while loop will
always be executed at least once, even if the condition is false, because the statements
are executed before the condition is tested.
========================================================================================
*/

$i = 0;
do
{
echo "The number is " + $i;
echo "<br />";
$i++;
}
while ($i <= 5);


echo "<p>Explanation:</p>";
echo "<p><b>i</b> equal to 0.</p>";
echo "<p>The loop will run</p>";
echo "<p><b>i</b> will increase by 1 each time the loop runs.</p>";
echo "<p>While <b>i</b> is less than, or equal to, 5, the loop will continue to run.</p>";

?>
</body>
</html>