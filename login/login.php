
<?php
	session_start();
	require '../dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<link href="css/style2.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class = "navbar">
	<ul>
		  <li><a href="../index.php">Home</a></li>
		  <li><a href="../projects/index.php">Games</a></li>
		  <li><a href="../gallery/index.php">Gallery</a></li>
		  <li><a href="../about-me/index.php">About</a></li>
		  <li><a href="../admin/index.php">Admin</a></li>
          <div class = "user-field">
          	<li><a href="../login/login.php">Login</a></li>
		    <li><a href="../signup/registration.php">Signup</a></li>
          </div>
    </ul>
</div>
		
		<div class="main-wrapper">
				<center>
					<h2>Login Form</h2>
				</center>
			
				<form class="myform" action="login.php" method="post" onsubmit="return validation()">
					<label>Username:</label><br>
					<input name="username" type="text" class="inputvalues" placeholder="Type your username" required /><br><br>
					<label>Password:</label><br>
					<input name="password" type="password" class="inputvalues" placeholder="Type your password" required /><br><br>
					<input name="Ulogin" type="submit" id="login_btn" value="Login"/></a>
					<a href="../signup/registration.php"><input type="button" id="signin_btn" value="SignUp"/></a>
				</form>
				<?php
				if(isset($_POST['Ulogin']))
				{
					$username=$_POST['username'];
					$password = $_POST['password'];

					$query= "select * from userreg WHERE username='$username' AND password='$password'";

					$query_run = mysqli_query($con,$query);
					if(mysqli_num_rows($query_run)>0)
					{
						//valid
						$_SESSION['username']= $username;
						header('location:profile.php');
					}
					else
					{
						//invalid
						echo '<script type="text/javascript"> alert("Invalid credentials") </script>';

					}
				}
				if(isset($_POST['Alogin']))
				{
					$username= $_POST['username'];
					$password = $_POST['password'];

					$query= "select * from adminreg WHERE username='$username' AND password='$password'";

					$query_run = mysqli_query($con,$query);
					if(mysqli_num_rows($query_run)>0)
					{
						//valid
						$_SESSION['username']= $username;
						header('location:adminprofile.php');
					}
					else
					{
						//invalid
						echo '<script type="text/javascript"> alert("Invalid credentials") </script>';

					}
				}

				?>
		</div>
		<h3 style = "text-align: center; color: red;"> Your Registration verification is pending  </h3>

	</body>
</html>
