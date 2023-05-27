<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container"> 
<h1>Supply Order Form</h1><br>
<form action="12process.php" method="post"> 
    Name: <input name="nama" type="text" /> <br><br>
    Materials:<select name="item"> 
        <option>Paint</option>
        <option>Brushes</option>
        <option>Erasers</option>
    </select><br><br>
    Quantity: <input name="quantity" type="text" /> <br><br>
    <input type="submit" />
</form>
</div>
</body>
</html>