<?php 
	session_start(); // Start the Session
	include ('includes/connection.php');

	if (isset($_POST['login'])) {
		$email = htmlentities(mysqli_real_escape_string($connection , $_POST['email']));
		$pass  = htmlentities(mysqli_real_escape_string($connection , $_POST['pass']));

		$select_user = "SELECT * FROM users 
						WHERE user_email = '$email'
						AND user_pass = '$pass'
						AND status = 'verified'";

		$query = mysqli_query($connection, $select_user);

		$check_users = mysqli_num_rows($query);

		if ($check_users == 1) {
			$_SESSION['user_email'] = $email;
			header('Location: home.php'); // Redirect to Home Page
		} else {
			echo "<script>alert('Your email or password is incorrect.')</script>";
			header('Location: signin.php');
		}
	}

 ?>