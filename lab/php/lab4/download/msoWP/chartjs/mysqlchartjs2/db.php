<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "demo";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);


	// Create database --------------------------------------------------------
	$sql = "CREATE DATABASE IF NOT EXISTS demo";

	if (mysqli_query($conn, $sql)) {
	    echo "Database created successfully<br>";
	} else {
	    echo "Error creating database: " . mysqli_error($conn) . "<br>";
	}

	$dbname = 'demo';
	mysqli_select_db ( $conn , $dbname);

	if (!$conn) {
	    die("select demo connection failed: " . mysqli_connect_error());
	}

	//create accelaration table --------------------------------------------------
	$sql = "CREATE TABLE IF NOT EXISTS `datasets` (
	  `data1` VARCHAR(50) NOT NULL,
	  `data2` VARCHAR(50) NOT NULL,
	  `ID` INT NOT NULL AUTO_INCREMENT,
	  PRIMARY KEY (`ID`))";

	if(mysqli_query($conn, $sql)){
	    echo "Table accelaration created successfully<br>";
	} else {
	    echo "Error creating accelaration table: " . mysqli_error($conn). "<br>";
	}
			
	$query = "INSERT INTO datasets (data1, data2) VALUES
	('1', '2'), ('4', '5') ,('3', '5'),('6', '7'),('2', '4'),('0', '3'),('3', '2')";
	
	$conn->query($query);
	mysqli_close($conn);
?>