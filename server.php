<?php

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $dbServerName = "localhost";
    $dbUsername = "root";
    $dbPassword = "";

    $dbName = "stylemyspace";

    $username = "";
    $email = "";
    $password = "";
    $passwordConfirm = "";

    $errors = array();

    $_SESSION['logged_in'] = false;

	
    // Create connection
    $conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

	


	if(isset($_POST['register_user'])){

		if(isset($_POST['username'])){
		    $username = $_POST['username'];
		}

		if(isset($_POST['email'])){
		    $email = $_POST['email'];
		}
		if(isset($_POST['password'])){
		    $password = $_POST['password'];
		}
		if(isset($_POST['passwordConfirm'])){
		    $passwordConfirm = $_POST['passwordConfirm'];
		}



	    // check db for existing user with same username

	    $user_check_query = "SELECT loginUsername FROM logintable WHERE loginUsername = '$username' or loginUsername = '$email' LIMIT 1";
		
		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);

		if($user){
			if (isset($user['username']) === $username) {
				array_push($errors, "This Username is taken!");
			}
			if (isset($user['email']) === $email) {
				array_push($errors, "This email ID is taken!");
			}
		}


		$username = mysqli_real_escape_string($conn, $username);
	    $email = mysqli_real_escape_string($conn, $email);
	    $password = mysqli_real_escape_string($conn, $password);
	    $passwordConfirm = mysqli_real_escape_string($conn, $passwordConfirm );



		if($password === $passwordConfirm){

			$password = md5($password);
			$query = "INSERT INTO logintable(loginUsername, loginEmail, loginPassword) VALUES ('$username','$email','$password')";
			mysqli_query($conn, $query);
			$_SESSION['username'] = $username;
			$_SESSION['logged_in'] = $username;
			echo '<script type="text/javascript">'; 
			echo 'alert("User Has Registered Successfully!");'; 
			echo 'window.location.href = "index.php";';
			echo '</script>';
		}else{
			array_push($errors, "Password and Password Confirm does not match!");
		}

		

	}

	// Login USer

	if (isset($_POST['login_user'])) {

		if(isset($_POST['username'])){
	    	$username = $_POST['username'];
		}

		if(isset($_POST['password'])){
		    $password = $_POST['password'];
		}

		$username = mysqli_real_escape_string($conn, $username);
		$password = mysqli_real_escape_string($conn, $password);
		
		$password = md5($password);

		$query = "SELECT loginUsername FROM logintable WHERE loginUsername = '$username' AND loginPassword='$password'";
		$results = mysqli_query($conn, $query);

		if (mysqli_num_rows($results) == 1) {
			$row = mysqli_num_rows($results);
 			// if ($results){
			$_SESSION['logged_in'] =  $username;
			$_SESSION['username'] = $username;
			
			echo '<script type="text/javascript">'; 
			echo 'alert("User Has Successfully Logged In!");'; 
			echo 'window.location.href = "index.php";';
			echo '</script>';

		}else{
			array_push($errors, "Wrong Username/password eneterd!");
		}

		}

		// Contact Us

		if(isset($_POST['contact_us'])){
			if(isset($_POST['name'])){
		    	$name = $_POST['name'];
			}

			if(isset($_POST['email'])){
			    $email = $_POST['email'];
			}

			if(isset($_POST['phone'])){
			    $phone = $_POST['phone'];
			}

			if(isset($_POST['message'])){
			    $message = $_POST['message'];
			}


			$username = mysqli_real_escape_string($conn, $username);
			$password = mysqli_real_escape_string($conn, $password);

			$query = "INSERT INTO feedbacktable(name, email, phone, message) VALUES ('$name','$email','$phone','$message')";

			mysqli_query($conn, $query);
			echo '<script type="text/javascript">'; 
			echo 'alert("Contact Us Details has been submitted!");'; 
			echo '</script>';
		}

		// Forget Password! 

		if (isset($_POST['forget_password'])) {

		if(isset($_POST['username'])){
	    	$username = $_POST['username'];
		}

		if(isset($_POST['oldPassword'])){
		    $oldPassword = $_POST['oldPassword'];
		}

		if(isset($_POST['newPassword'])){
		    $newPassword = $_POST['newPassword'];
		}

		$username = mysqli_real_escape_string($conn, $username);
		$oldPassword = mysqli_real_escape_string($conn, $oldPassword);
		$newPassword = mysqli_real_escape_string($conn, $newPassword);


		$oldPassword = md5($oldPassword);
		$newPassword = md5($newPassword);

		$user_check_query = "SELECT loginUsername FROM logintable WHERE loginUsername = '$username' AND loginPassword='$oldPassword'";
		
		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);

		if($user){
			if($oldPassword === $newPassword){
				array_push($errors, "Old password and New Password Cannot be same!");
			}else {
				$query = "UPDATE logintable set loginPassword='$newPassword' WHERE loginUsername = '$username' AND loginPassword='$oldPassword'";

				echo '<script type="text/javascript">'; 
				echo 'alert("Password Changed Successfully!");'; 
				echo 'window.location.href = "login.php";';
				echo '</script>';
			}
			
			}else{
				array_push($errors, "Old Password/Username is incorrect!");
			}

		}

		// Delete User
		if (isset($_POST['delete_user'])) {

		if(isset($_POST['username'])){
	    	$username = $_POST['username'];
		}

		if(isset($_POST['password'])){
		    $password = $_POST['password'];
		}

		$username = mysqli_real_escape_string($conn, $username);
		$password = mysqli_real_escape_string($conn, $password);

		$password = md5($password);

		$user_check_query = "SELECT loginUsername FROM logintable WHERE loginUsername = '$username' AND loginPassword='$password'";
		
		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);

		if($user){

				$query = "DELETE FROM logintable WHERE loginUsername = '$username'";

				echo '<script type="text/javascript">'; 
				echo 'alert("User deleted from our database!");'; 
				echo 'window.location.href = "login.php";';
				echo '</script>';
					
			}else{
				array_push($errors, "Username Doesn't Exist/ Password is incorrect!");
			}

		}

?>	
<!-- https://www.youtube.com/watch?v=qjwc8ScTHnY -->