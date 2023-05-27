<!--
 get the values from the textboxes and create a Times Table proramme. 
 When the button is clicked, the output will be something like this:
-->

<html>
<head>
<title>A Times Table Programme</title>


<?PHP
	$times = 2;

if (isset($_POST['Submit1'])) {

	$start = $_POST['txtStart'];
	$end = $_POST['txtEnd'];
	$times = $_POST['txtTimes'];


	for($start; $start <= $end; $start++) {
		$answer = $start * $times;
		print $start . " multiplied by " . $times . " = " . $answer . "<BR>";
	}

}

?>

</head>

<body>


<FORM NAME = frmOne Method = "POST" Action = "timesTableFull.php">

Start Number: <INPUT TYPE = Text NAME  = txtStart SIZE = 5 value ="1">
End Number: <INPUT TYPE = Text NAME = txtEnd SIZE = 5 value ="10">
Multiply By: <INPUT TYPE = Text NAME = txtTimes SIZE = 5 value = <?PHP print $times; ?> >
<P>
<INPUT TYPE = Submit Name = Submit1 VALUE = "Do Times Table">
<P>

</FORM>
</body>

<html>