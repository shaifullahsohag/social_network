<?php 
	$page_title = 'Signup - Coding Cafe';
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
 				<h3 class="text-center"><strong>Join Coding cafe</strong></h3>
 			</div> <!-- /End .header -->
 			<div class="l-part">
 				<form action="" method="POST">

 					<div class="input-group">
 						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
 						<input type="text" name="first_name" class="form-control" placeholder="First Name" required="required">
 					</div> <!-- /End .form-group -->
 					
 					<div class="input-group">
 						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
 						<input type="text" name="last_name" class="form-control" placeholder="Last Name" required="required">
 					</div> <!-- /End .form-group -->

 					<div class="input-group">
 						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
 						<input type="password" name="u_pass" id="password" class="form-control" placeholder="Password" required="required">
 					</div> <!-- /End .form-group -->

 					<div class="input-group">
 						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
 						<input type="email" name="u_email" id="email" class="form-control" placeholder="Email" required="required">
 					</div> <!-- /End .form-group -->

 					<div class="input-group">
 						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
 						<select class="form-control" name="u_country" required="required">
 							<option dsiabled>Select your Country</option>
 							<option>Bangladesh</option>
 							<option>India</option>
 							<option>Pakistan</option>
 							<option>Nepal</option>
 							<option>China</option>
 							<option>Japan</option>
 							<option>United State</option>
 							<option>United KIngdom</option>
 						</select>
 					</div> <!-- /End .form-group -->

 					<div class="input-group">
 						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
 						<select class="form-control input-md" name="u_gender" required="required">
 							<option dsiabled>Select your Gender</option>
 							<option>Male</option>
 							<option>Female</option>
 							<option>Others</option>
 						</select>
 					</div> <!-- /End .form-group -->

 					<div class="input-group">
 						<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
 						<input type="date" name="u_birthday" class="form-control input-md" placeholder="Date of Birth" required="required">
 					</div> <!-- /End .form-group -->
					
					<a href="signin.php" data-toggle="tooltip" id="have_account" title="Signin">Already have an account?</a>

					<center>
						<button type="submit" id="sign_up" class="btn btn-info btn-lg" name="sign_up">Sign Up</button>
					</center>
					
					<?php include('insert_user.php'); ?>

 				</form>
 			</div> <!-- /End .l-part -->
 		</div> <!-- /End .main_content -->
 	</div> <!-- /End .container -->

<?php require_once ('inc/footer.php'); // Included Page's Footer ?>