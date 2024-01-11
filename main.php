<?php 
	$page_title = 'Home - Coding Cafe';
	require_once('inc/header.php'); // Include Page's Header
 ?>

 	<div class="container-fluid heading-top">
		<div class="well">
			<h1 class="text-center">Coding Cafe</h1>
		</div> <!-- /End .well -->
 	</div> <!-- /End .container-fluid -->
 
	<div class="container">
		<div class="row">

	 		<div class="col-sm-6">
	 			<div class="main-left">
	 				<h3>
		 				<span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;
		 				<strong>Follow your Interest.</strong>
		 			</h3>
		 			<h3>
		 				<span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;
		 				<strong>Hear what people are taking about.</strong>
		 			</h3>
		 			<h3>
		 				<span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;
		 				<strong>Join the conversation.</strong>
		 			</h3>
	 			</div> <!-- /End .styling -->
	 		</div> <!-- /End .col-sm-6 -->

			<div class="col-sm-6">
				<div class="main-right">
					<a href="main.php" class="site-logo">Logo</a>
					<h2 class="text-center">
						<strong>See what's happening in <br> In the world right now.</strong>
					</h2>
					<h4 class="text-center">
						<strong>Join Coding Cafe Today.</strong>
					</h4>
					<form action="" method="POST">
						<a href="signup.php" id="signup" name="signup" class="btn btn-info btn-lg">Sign Up</a>
						<a href="signin.php" id="login" name="login" class="btn btn-info btn-lg">Log in</a>
					</form>
				</div> <!-- /End .main-right -->
			</div> <!-- /End .col-sm-6 -->

	 	</div> <!-- /End .row -->
	</div> <!-- /End .container -->

<?php require_once ('inc/footer.php'); // Included Page's Footer ?>