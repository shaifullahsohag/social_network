<?php 
	$page_title = 'Home - Coding Cafe';
	require_once('inc/header.php'); // Include Page's Header
	include ('inc/navigation.php'); // Include Site Navigation 
 ?>
	<div class="container">
		<div class="insert_post">
			<center>
				<form action="home.php?id=<?php echo $user_id; ?>" method="POST" id="f" enctype="multipart/form-data">
					<textarea class="form-control" id="content" tows="4" name="content" placeholder="What's in your mind?"></textarea>
					<label class="btn btn-warning" for="upload_image" class="upload_image">Select Image</label>
					<input type="file" name="upload_image" size="30" id="upload_image">
					<button type="submit" id="btn-post" class="btn btn-success" name="submit_post">Post</button>
				</form>
				<?php //insertPost(); ?>
			</center>
		</div> <!-- /End .insert_post -->
	</div> <!-- /End .container -->

 <?php require_once ('inc/footer.php'); // Included Page's Footer ?>