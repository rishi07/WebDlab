
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link href="admin.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class = "navbar">
	<ul>
		  <li><a href="../index.php">Home</a></li>
		  <li><a href="../projects/index.php">Games</a></li>
		  <li><a href="../galery/index.php">Gallery</a></li>
		  <li><a href="../about-me/index.php">About</a></li>
		  <li><a href="../admin/index.php">Admin</a></li>
          <div class = "user-field">
          	<li><a href="../login/login.php">Login</a></li>
		    <li><a href="../signup/registration.php">Signup</a></li>
          </div>
    </ul>
</div>

    <div class="main">
	    <h2 class="sub-head">ADMIN LOGIN</h2>
		<div class="sub-main">	
			<form action="#" method="post">
				<div class="side_label">
                     <label>Email</label>
                </div>
				<input placeholder="akray215@gmail.com" name="mail" class="mail" type="text" required="">
				<div class="side_label">
                     <label>Password</label>
                </div>
				<input  placeholder="Password" name="Password" class="pass" type="password" required="">	
				<input type="submit" value="LOGIN">
			</form>
		</div>
</div>
</div>


</body>
</html>
