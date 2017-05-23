<?php 
	require('../model/database.php');
	require('../model/cms_db.php');
	require('../model/user_db.php');
	
	global $db;
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	if (check_login($username, $password)) {
		header("Location: ../view/show_articles.php?user=". $username ."");
		exit;
	}
	else {
		header("Location: ../view/login_form?error='Username or password incorrect.'");
		exit;
	}
 ?>