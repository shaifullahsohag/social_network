<?php 
	include ('login.php');
	$page_title = 'Login - Coding Cafe';
	require_once('inc/header.php'); // Include Page's Header
 ?>
 
 	<div class="container-fluid heading-top">
		<div class="well">
			<h1 class="text-center">Coding Cafe</h1>
		</div> <!-- /End .well -->
 	</div> <!-- /End .container-fluid -->

	<div class="container">
		<div class="main_content">

			<div class="header">
 				<h3 class="text-center"><strong>Login to Coding Cafe</strong></h3>
 			</div> <!-- /End .header -->

 			<div class="l-part">

 				<form action="" method="POST">

 					<input type="email" class="form-control input-md" name="email" placeholder="Email" required="required"> <br>

 					<div class="overlap-text">
 						<input type="password" class="form-control input-md" name="pass" placeholder="Password" required="required"> <br>
 						<a href="forgot_password.php" id="forgot_password" data-toggle="tooltip" title="Reset Pasword">Forgot Password?</a>
 					</div> <!-- /End .overlap-text -->

 					<a href="signup.php" data-toggle="tooltip" id="have_account" title="Create Account">Don't have an account?</a>

 					<center>
						<button type="submit" id="sign_in" class="btn btn-info btn-lg" name="login">Login</button>
					</center>
					
 				</form>

 			</div> <!-- /End .l-part -->

		</div> <!-- /End .main-content -->
	</div> <!-- /End .container -->

 <?php require_once ('inc/footer.php'); // Included Page's Footer ?>