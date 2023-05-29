<html>
<body>
<?php
    
$nama = $_POST['nama'];
$quantity = $_POST['quantity'];
$item = $_POST['item'];

echo "Hello ". $nama . ", <br /> </br>";
echo "You ordered ". $quantity . " " . $item . ".<br /></br>";
echo "Thank you for ordering from MSO Supplies!";

?>
</body>
</html>