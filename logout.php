<?php 
	session_start(); // Start the Session
	unset($_SESSION['user_email']); // Delete already started session
	session_destroy(); // Delete all the Session Key permanently
	header('Location: signin.php'); // Redirect the user to signin.php after Logout
 ?>