<?php
    include('server.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles/login.css">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<!-- Favicon -->
    <link rel="icon" href="favicon.png" type="image/png">
</head>
<body>
	<div class="container">
			<div class="wrap">
				<form class="login-form" method="POST" action="forgetPassword.php">
					<span class="login-form-title"> FORGET PASSWORD </span> <br>
					<span style="color: black;">Enter Username</span> 
					<input type="text" value="username" name="username" class="wrap-input" placeholder = "Enter Username" required=""> <br>
					<span style="color: black;">Enter Old Password</span>
					<input type="password" value="username" name="oldPassword" class="wrap-input" placeholder = "Enter Old Password" required=""> <br>
					<span style="color: black;">Enter New Password</span>
					<input type="password" value="username" name="newPassword" class="wrap-input" placeholder = "Enter New Password" required=""> <br>
					<button name="forget_password" value="submit" class="login-form-button">Submit</button>
				</form> <br>
					<?php include 'errors.php'?>
			</div>
	</div>
</body>
</html>