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

	
	<style type="text/css">
		nav
		{
			margin-bottom: -20px;
		}
		.box1
{
    height: 600px;
    width: 500px;
    background-color: black;
    margin: 0px auto;
    opacity: .8;
    color: white;
    padding: 20px;
}
label{
	font-size: 18px;
	font-weight: 600;
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
				
			</h1>
			<br>
			<h1 style="text-align: center; font-size: 25px">
				User Login Form
			</h1><br>
			<form name="login" action="" method="post">
				<br>
				<b>
				<p style="padding-left: 50px; font-size: 15px; font-weight: 700">Login as:</p></b>
        <br>
				<input style="margin-left: 50px; width: 18px;" type="radio" name="user" id="admin" value="admin">
				<label for="admin">Admin</label>
				<input style="margin-left: 50px; width: 18px;" type="radio" name="user" id="student" value="student">
				<label for="student">Student</label>
				<div class="login">
				<input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
				<input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
				<input class="btn btn-default "type="submit" name="submit" value="Login" style="color : black; width: 60px; height: 30px;"></div>
				
				
</form>
			
		</div>

	</div>
	
</section>
<?php
    if(isset($_POST['submit']))
    {
      if($_POST['user']=='admin')
      {
      	 $count=0;
      $res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");
      
      $row= mysqli_fetch_assoc($res);
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
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
            window.location="admin/profile.php"
          </script>
        <?php
      }
      }
  	else
      {$count=0;
      $res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && password='$_POST[password]';");
      
      $row= mysqli_fetch_assoc($res);
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
              
              <script type="text/javascript">
                alert("The username and password doesn't match.");
              </script> 
              
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
            window.location="student/profile.php"
          </script>
        <?php
      }
     }
    }

  ?>
 
</body>
</html>