<?php 
	include ('includes/connection.php'); // Include Connection file
	
	/**
	 * [insertPost description]
	 * @return [type] [description]
	 */
	function insertPost() {

		if (isset($_POST['submit_post'])) {
			global $connection;
			global $user_id;

			$content       = htmlentities($_POST['content']);
			$upload_image  = $_FILES['upload_image']['name'];
			$img_tmp       = $_FILES['upload_image']['tmp_name'];
			$random_number = rand(1,100);

			if (strlen($content) > 250) {
				echo "<script>Please use 250 or less than 250 words.</script>";
				echo "<script>window.open('home.php', '_self')</script>";
			}
			else if (strlen($upload_image) >= 1 && strlen($content) >= 1) {

				move_uploaded_file($img_tmp, "postImage/$upload_image.$random_number");

				$insert = "INSERT INTO posts (user_id, post_content, upload_image, post_date)
				           VALUES('$user_id', '$content', '$upload_image.$random_number' , NOW())";

				$run = mysqli_query($connection, $insert);

				if ($run) {
					echo "<script>alert('Your post updated a moment age!')</script>";
					echo "<script>window.open ('home.php', '_self')</script>";

					$update = "UPDATE users 
					SET posts = 'yes'
					WHERE user_id = '$user_id'";

					$run_update = mysqli_query($connection, $update);
				}
				exit();
			} else {
				if ($upload_image == '' && $content == '') {
					echo "<script>alert('Error Occured while uploading!')</script>";
					echo "<script>window.open('home.php', '_self')</script>";
				}
				else {

					if ($content == '') {
						move_uploaded_file($img_tmp , "postImage/$upload_image.$random_number");
						$insert = "INSERT INTO posts (user_id, post_content, upload_image, post_date)
								   VALUES('$user_id', 'NO', '$upload_image.$random_number' , NOW())";

						$run = mysqli_query($connection, $insert);

						if ($run) {
							echo "<script>alert('Your post updated a moment age!')</script>";
							echo "<script>window.open ('home.php', '_self')</script>";

							$update = "UPDATE users 
							SET posts = 'yes'
							WHERE user_id = '$user_id'";

							$run_update = mysqli_query($connection, $update);
						}

						exit();
					}
					else {
					$insert = "INSERT INTO posts (user_id, post_content, post_date)
							   VALUES('$user_id', 'NO' , NOW())";

					$run = mysqli_query($connection, $insert);

					if ($run) {
						echo "<script>alert('Your post updated a moment age!')</script>";
						echo "<script>window.open ('home.php', '_self')</script>";

						$update = "UPDATE users 
						SET posts = 'yes'
						WHERE user_id = '$user_id'";

						$run_update = mysqli_query($connection, $update);
					}
				}
			}
		}
	}
}

 ?>