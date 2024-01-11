<?php 
	
	/**
	 * We declare some variables for database connection
	 */
	$db_servername = '127.0.0.1'; // Host Name
	$db_username   = 'bdtuts'; // MySQLi User Name
	$db_password   = 1234; // MySQLi Password
	$database_name = 'social_network'; // Database Name

	/**
	 * We create a new connection
	 */
	$connection = mysqli_connect($db_servername, $db_username, $db_password, $database_name);

	/**
	 * We check the connection
	 */
	if (!$connection) {
		die ('<div class="alert alert-danger text-center">
				Sorry, couldn\'t connect with the server. <br> Error Code: 
				'.mysqli_connect_errno($connection).'
			</div>');
	}

 ?>