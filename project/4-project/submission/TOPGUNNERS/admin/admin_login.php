<?php
		include "connection.php";
		include "navbar.php";


?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-witdth, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		nav
		{
			margin-bottom: -20px;
		}
	</style>

</head>
<body>

<section>
	<div class="log_img">
		<br><br><br>
		<div class="box1">
			<h1 style="text-align: center; font-size: 35px; font-family: Lucida Console;">
				Library Management System
				
			</h1><br>
			<h1 style="text-align: center; font-size: 25px">
				User Login Form
			</h1><br>
			<form name="login" action="" method="post">
				<br>
				<div class="login">
				<input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
				<input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
				<input class="btn btn-default "type="submit" name="submit" value="Login" style="color : black; width: 60px; height: 30px;"></div>
				
			
			<p style="color: white; padding-left: 15px;">
				<br><br>
				<a style="color: white;" href=""> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp 
				New to this website? <a style="color: white"; href="registration.php">Sign up</a>
			</p>
</form>
			
		</div>

	</div>
	
</section>
<?php
    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");
      
      $row= mysqli_fetch_assoc($res);
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
              <!--
              <script type="text/javascript">
                alert("The username and password doesn't match.");
              </script> 
              -->
          <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
            <strong>The username and password doesn't match</strong>
          </div>    
        <?php
      }
      else
      {
       	$_SESSION['login_user'] = $_POST['username'];
        $_SESSION['pic']= $row['pic'];

        ?>
          <script type="text/javascript">
            window.location="index.php"
          </script>
        <?php
      }
    }

  ?>
 
</body>
</html>