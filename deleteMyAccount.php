<?php
    include('server.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete My Account</title>
</head>
<link rel="stylesheet" type="text/css" href="styles/login.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<!-- Favicon -->
<link rel="icon" href="favicon.png" type="image/png">
<!-- JSON  -->
<link rel="manifest" href="manifest.json">

<body>
	<div class="container">
			<div class="wrap">
				<form class="login-form" method="POST" action="deleteMyAccount.php">
					<span class="login-form-title"> DELETE MY ACCOUNT </span> <br>
					<span>ENTER USERNAME: </span>
					<input type="text" value="username" name="username" class="wrap-input" placeholder = "Username" required=""> <br>
					<span>ENTER PASSWORD: </span>
					<input type="password" value="password" name="password" class="wrap-input" placeholder = "Password" required=""> <br>
					<button name="delete_user" value="submit" class="login-form-button">CONFIRM</button>
				</form>
				<br>
				<?php include 'errors.php'?>
		        <br>
				<span><a href="index.php">Go Back to Home</a></span>
			</div> 
		</div>
</body>
</html>