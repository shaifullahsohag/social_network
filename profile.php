<?php 
	session_start(); // Start the Session
	if (!isset($_SESSION['user_email'])) {
		header('Location: index.php');
	}
	$page_title = 'Profile - Coding Cafe';
	require_once('inc/header.php'); // Include Page's Header 
	include ('inc/navigation.php'); // Include Site Navigation 
?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php 
					echo "
						<div>

						<div class='cover-picture'><img src='cover/$user_cover' class='img-rounded' id='cover-img' atl='cover'>
						</div>

						<form action='profile.php?u_id=$user_id' method='POST' enctype='multipart/form-data' id='change_cover'>
							<ul class='nav pull-left' id='modify_cover_button'>
								<li class='dropdown'>
									<a href='#' class='dropdown-toggle btn btn-default' data-toggle='dropdown'>
										Change Cover
									</a>
									<div class='dropdown-menu'>
										<p class='text-center'> 
											Click <strong>Select Cover</strong> and then click the <br>
											<strong>update cover</strong>
										</p>
										<center>
											<label class='btn btn-info' for='select_cover'>Select Cover</label>
											<input type='file' name='u_cover' id='select_cover' size='60'>
											<button type='submit' class='btn btn-info' name='cover_submit'>
												Update Cover
											</button>
										</center>
									</div>
								</li>
							</ul>		
						</form>
						
						</div>

						<div id='profile_img'>
							<img src='users/$user_image' alt='Profile Picture' class='img-circle'>
							<form action='profile.php?u_id=$user_id' method='POST' enctype='multiplart/form-data'>
								<label for='select_profile' class='select_profile_img'>Select Profile</label>
								<input type='file' name='u_image' id='select_profile' size='60' style='display:none;'>
								<button type='submit' id='button_profile' class='btn btn-info' name='profile_submit'>
									Update Profile
								</button>
							</form>
						</div>
					";
				 ?>

				<?php 

					if (isset($_POST['cover_submit'])) {
						$u_cover       = $_FILES['u_cover']['name'];
						$image_tmp     = $_FILES['u_cover']['tmp_name'];
						$random_number = rand(1, 100);

						if ($u_cover == '') {
							echo "<script>alert('Please Select Cover Image')</script>";
							echo "<script>window.open('profile.php?u_id=$user_id' , '_self')</script>";
							exit();
						} else {
							move_uploaded_file($image_tmp, "cover/$u_cover.$random_number");
							$update = "UPDATE users 
									   SET user_cover = '$u_cover.$random_number'
									   WHERE user_id = '$user_id'";
							$run = mysqli_query($connection, $update);

							if ($run) {
								echo "<script>alert('Your Cover Updated.')</script>";
								echo "<script>window.open('profile.php?u_id=$user_id' , '_self')</script>";
							}
						}
					}

				 ?>

				 <?php 

					if (isset($_POST['profile_submit'])) {
						$u_image       = $_FILES['u_image']['name'];
						$image_tmp     = $_FILES['u_image']['tmp_name'];
						$random_number = rand(1, 100);

						if ($u_image == '') {
							echo "<script>alert('Please Select Profile Picture')</script>";
							echo "<script>window.open('profile.php?u_id=$user_id' , '_self')</script>";
							exit();
						} else {
							move_uploaded_file($image_tmp, "users/$u_image.$random_number");
							$update = "UPDATE users 
									   SET user_image = '$u_image.$random_number'
									   WHERE user_id = '$user_id'";
							$run = mysqli_query($connection, $update);

							if ($run) {
								echo "<script>alert('Your Profile Updated.')</script>";
								echo "<script>window.open('profile.php?u_id=$user_id' , '_self')</script>";
							}
						}
					}

				?>

			</div> <!-- /End .col-sm-8 -->
		</div> <!-- /End .row -->

		<div class="row">
			<div class="col-sm-4">
				<div class="about_single_user">
					<?php 
						echo "
							<h2 class='text-center'><strong>About</strong></h2>
							<h4 class='text-center'><strong>$first_name $last_name</strong></h4>
							<p><strong><i id='description'>$describe_user</i></strong></p><br>
							<p><strong>Relationship status</strong>$relationship_status</p><br>
							<p><strong>Lives in : </strong>$user_country</p><br>
							<p><strong>Member since : </strong>$register_date</p><br>
							<p><strong>Gender : </strong>$user_gender</p><br>
							<p><strong>Date of Birth : </strong>$user_birthday</p><br>
						";
					 ?>
				</div> <!-- /End .about_single_user -->
			</div> <!-- /End .col-sm-4 -->
		</div> <!-- /End .row -->
	</div> <!-- /End .container -->
	
<?php require_once ('inc/footer.php'); // Included Page's Footer ?>