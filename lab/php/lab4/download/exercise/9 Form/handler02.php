<html>
<head>
<title>Form</title>
</head>


<?php
$strHeading = "<h1>Hello " . $_POST["username"] . "</h1>";//get the name
$colortype = $_POST["color"];//get data radio button "name = color"

	switch ($colortype) {
		case "r":
		$strBackgroundColor = "rgb(255,0,0)"; //red
		break;

		case "g";
		$strBackgroundColor = "rgb(0,255,0)"; //green
		break;

		case "b":
		$strBackgroundColor = "rgb(0,0,255)"; //blue
		break;

		default:
		$strBackgroundColor = "rgb(200,200,200)"; //gray color
		echo "<h3>Please select your color</h3>";
		break;
		}
?>

<body style="background: <?php echo $strBackgroundColor; ?>;"> <!--bground value from $strBackgroundColor-->
<?php echo $strHeading; ?>

</body>
</html>
