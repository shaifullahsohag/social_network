<?php 
	$page_title = 'Login - Coding Cafe';
	require_once('inc/header.php'); // Include Page's Header
	include('includes/connection.php'); // Include connection.php File
 ?>

	<div class="container">

		<?php 

			if (isset($_POST['sign_up'])) {

				$first_name = htmlentities(mysqli_real_escape_string($connection, $_POST['first_name']));
				$last_name = htmlentities(mysqli_real_escape_string($connection, $_POST['last_name']));
				$pass = htmlentities(mysqli_real_escape_string($connection, $_POST['u_pass']));
				$email = htmlentities(mysqli_real_escape_string($connection, $_POST['u_email']));
				$country = htmlentities(mysqli_real_escape_string($connection, $_POST['u_country']));
				$gender = htmlentities(mysqli_real_escape_string($connection, $_POST['u_gender']));
				$gender = htmlentities(mysqli_real_escape_string($connection, $_POST['u_gender']));

				$birthday = htmlentities(mysqli_real_escape_string($connection, $_POST['u_birthday']));
				$status = "verified";
				$posts = "no";
				$newgid = sprintf('%05d', rand(0 , 999999));

				$username = strtolower($first_name . "_" . $last_name . "_" . $newgid);

				$check_username_query = "SELECT user_name FROM users 
										 WHERE user_email = '$email'";
				$run_uername = mysqli_query($connection , $check_username_query);

				if (strlen($pass) < 9 ) {
					echo "<script>alert('Password should be minimum 9 characters.')</script>";
					exit();
				}

				$check_email = "SELECT * FROM users 
								WHERE user_email = '$email'";
				$run_email = mysqli_query($connection , $check_email);
				$check = mysqli_num_rows($run_email);
				if ($check == 1) {
					echo "<script>alert('Email already exist, Please try using another email.')</script>";
					header('Location: signup.php');
				}

				$rand = rand(1, 3); // Random Number between 1 and 3

				if ($rand == 1) {
					$profile_pic = 'head_red.png';
				} else if ($rand == 2) {
					$profile_pic = 'profile_one.jpg';
				} else if ($rand == 3) {
					$profile_pic = 'profile_two.jpg';
				}

				$insert = "INSERT INTO users (
						   f_name, 
						   l_name, 
						   user_name, 
						   describe_user, 
						   relationship, 
						   user_pass, 
						   user_email, 
						   user_country, 
						   user_gender, 
						   user_birthday, 
						   user_image, 
						   user_cover, 
						   user_reg_data, 
						   status, 
						   posts, 
						   recovery_account)
						   VALUES('$first_name', 
						   '$last_name', 
						   '$username', 
						   'Hello, coding cafe, this is my default status!', 
						   '...', 
						   '$pass',
						   '$email',
						   '$country',
						   '$gender',
						   '$birthday',
						   '$profile_pic',
						   'default_cover.jpg',
						   NOW(),
						   '$status',
						   '$posts',
						   'Iwanttoputadingintheuniverse.'
						)";

				$query = mysqli_query($connection, $insert);

				if ($query) {
					echo "<script>alert('Well done $first_name, you are good to go.')</script>";
					header('Location: login.php');
				} else {
					echo "<script>alert('Sorry, registration failed. Please try again.')</script>";
					header('Location: signup.php');
				}
			}

		?>

	</div> <!-- /End .container -->

 <?php require_once ('inc/footer.php'); // Included Page's Footer ?>