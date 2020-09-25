<?php
    include('server.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="styles/login.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<!-- Favicon -->
    <link rel="icon" href="favicon.png" type="image/png">
    <!-- JSON  -->
        <link rel="manifest" href="manifest.json">
</head>
<body>

	    <div class="container">
			<div class="wrap">
				<form class="login-form" method="POST" action="login.php">
					<span class="login-form-title"> LOGIN FORM </span> <br>
					<input type="text" value="username" name="username" class="wrap-input" placeholder = "Username" required=""> <br>
					<input type="password" value="password" name="password" class="wrap-input" placeholder = "Password" required=""> <br>
					<button name="login_user" type="Login" value="submit" class="login-form-button">LOGIN</button>
				</form>
				<br>
				<?php include('errors.php')?>
				<br> OR LOGIN FROM <br>
				<ul class="social-icons">
		          <li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		          <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
		          <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>  
		          <li><a href="google" href="#"><i class="fa fa-google"></i></a></li>   
		        </ul>
		        <br>
		        <br>
		        <span><a href="forgetPassword.php">Forgot Password?</a></span>
		        <br>
				<span style="color: black;">Haven't Registered yet? Click <a href="registrationform.php">Here</a></span>
			</div> 
		</div>

		
	<script src="https://use.fontawesome.com/77b69c85b2.js"></script>
</body>
</html>
