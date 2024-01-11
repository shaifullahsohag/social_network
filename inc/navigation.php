
<?php include ('functions/functions.php'); ?>

<nav class="navbar navbar-default">
	<div class="container-fluid">

		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="home.php" class="navbar-brand">Coding cafe</a>
		</div> <!-- /End .navbar-header -->

		<div class="collapse navbar-collapse" id="main-navigation">
			<ul class="nav navbar-nav">

				<?php 

					$user = $_SESSION['user_email'];
					$get_user = "SELECT * FROM users 
								 WHERE user_email ='$user'";
					$run_user = mysqli_query($connection , $get_user);
					$row = mysqli_fetch_array($run_user);

					$user_id             = $row['user_id'];
					$user_name           = $row['user_name'];
					$first_name          = $row['f_name'];
					$last_name           = $row['l_name'];
					$describe_user       = $row['describe_user'];
					$relationship_status = $row['relationship'];
					$user_pass           = $row['user_pass'];
					$user_email          = $row['user_email'];
					$user_country        = $row['user_country'];
					$user_gender         = $row['user_gender'];
					$user_birthday       = $row['user_birthday'];
					$user_image          = $row['user_image'];
					$user_cover          = $row['user_cover'];
					$recovery_account    = $row['recovery_account'];
					$register_date       = $row['user_reg_data'];

					$user_posts = "SELECT * FROM posts 
								   WHERE user_id = '$user_id'";
					$run_posts = mysqli_query($connection , $user_posts);
					$posts = mysqli_num_rows($run_posts);

				 ?>

				<li>
					<a href='profile.php?<?php echo "$u_id = $user_id" ?>'>
						<?php echo $first_name; ?>
					</a>
				</li>
				<li><a href="home.php">Home</a></li>
				<li><a href="home.php">Find People</a></li>
				<li><a href="messages.php?u_id=new">Messages</a></li>

				<?php 
					echo '
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="my_post.php?u_id=$user_id">My Posts
								<span class="badge badge-secondary">'.$posts.'</span>
							</a>
						</li>
						<li>
							<a href="edit_profile.php?u_id=$user_id">Edit Account</a>
						</li>
						<li role="separator" class="divider"></li>
						<li>
							<a href="logout.php">Logout</a>
						</li>
					</ul>
				</li>
					';
				 ?>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="deopdown">
					<form class="navbar-form navbar-left" action="results.php" method="GET">
						<div class="form-group">
							<input type="text" name="user_query" class="form-control" placeholder="Search">
						</div> <!-- /End .form-group -->
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</li>
			</ul>

		</div> <!-- /End .collapse navbar-collapse -->

	</div> <!-- /End .container-fluid -->
</nav>