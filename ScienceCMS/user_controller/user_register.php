<?php 
	require('../model/database.php');
	require('../model/cms_db.php');
	require('../model/user_db.php');
	
	global $db;
	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	
	if (!check_username($username)) {
		add_user($username, $password, $email);
		header("Location: ../view/login_form");
		exit;
	}
	else {
		header("Location: ../view/register_form?error='Username already exists.'");
		exit;
	}
 ?>