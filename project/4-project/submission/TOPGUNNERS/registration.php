<?php
	
	include "navbar.php";
	include "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-witdth, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
		section
		{
			margin-top: -20px;
			height: 930px;
			width: 2000px;
			background-color: gray;
			background-repeat: no-repeat;
		}
		.box
		{
			height: 600px;
    		width: 500px;
    		background-color: black;
    		margin: 0px auto;
    		opacity: .8;
    		color: white;
    		padding: 20px;
    		padding-top: 140px;
		}
		label{
			font-size: 18px;
			font-weight: 600;
}

	</style>

</head>
<body>
	
			
<section><br><br><br><br>
	<div class="box">
			<form name="signup" action="" method="post">
				<br>
				<b>
				<p style="padding-left: 50px; font-size: 15px; font-weight: 700">Sign Up as:</p></b>

				<input style="margin-left: 50px; width: 18px;" type="radio" name="user" id="admin" value="admin">
				<label for="admin">Admin</label>
				<input style="margin-left: 50px; width: 18px;" type="radio" name="user" id="student" value="student">
				<label for="student">Student</label>
				<button class="btn btn-default" type="submit" name="submit1" style="color: black; font-weight: 700; width: 70px; height: 35px;">OK
				</button>
			</form>
		
	</div>
	<?php
	if(isset($_POST['submit1']))
	{
		if($_POST['user']=='admin')
		{?>
			 	<script type="text/javascript">
            	window.location="admin/registration.php"
         		 </script>
          <?php

		}
		else
		{?>
			 <script type="text/javascript">
            window.location="student/registration.php"
          </script>
          <?php

		}
	}
	?>
</section>
	

   

</body>
</html>