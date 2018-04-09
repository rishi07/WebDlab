<?php
	require '../dbconfig/config.php';
?>
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Profile Page</title>
		<link rel="stylesheet" href="css/style2.css" type="text/css">
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
					<h2>Profile Page</h2>
					<h3>Welcome
						<?php echo $_SESSION['username'] ?>
					</h3>					
			        	<?php
						if($_SESSION['username']==""){
							header('location:login.php');
						}
					?>
				</center>
				<form class="myform" action="profile.php" method="post">
					
					<input name='logout' type="submit" id="logout_btn" value="Logout"/><br><br>
						<?php
							$usern = $_SESSION['username'];
							$query= "select * from userreg WHERE username='$usern'";
							$query_run = mysqli_query($con,$query);
							// $row = mysqli_fetch_array($query_run);
							// var_dump($row);exit();
							while($row = mysqli_fetch_array($query_run)) {
								 $fullname = $row['fullname'];
								 $email = $row['email'];
								 $rollNum = $row['rollNum'];
								 $birth = $row['birth'];
								 $paddress = $row['paddress'];
								 $clgc = $row['clgc'];
								  echo "<h3 style='padding-left:40px;text-align: center; text-decoration: underline;'><strong style='color:rgb(100,200, 120);'>Full Name </strong>: $fullname<h3>
								  		<h3 style='padding-left:40px;text-align: center; text-decoration: underline;'><strong style='color:rgb(100,200, 120);'>Email Id </strong>: $email<h3>
								  		<h3 style='padding-left:40px;text-align: center; text-decoration: underline;'><strong style='color:rgb(100,200, 120);'>Roll No </strong>: $rollNum<h3>
								  		<h3 style='padding-left:40px;text-align: center; text-decoration: underline;'><strong style='color:rgb(100,200, 120);'>Date Of Birth </strong>: $birth<h3>
								  		<h3 style='padding-left:40px;text-align: center; text-decoration: underline;'><strong style='color:rgb(100,200, 120);'>Address </strong>: $paddress<h3>
								  		<h3 style='padding-left:40px;text-align: center; text-decoration: underline;'><strong style='color:rgb(100,200, 120);'>College </strong>: $clgc<h3>";
    						}
						?>

				</form>

				<?php
					if(isset($_POST['logout']))
					{
						session_destroy();
						header('location:login.php');
					}
				?>
		</div>
	</body>
</html>
