<?php

function check_username($username) {
    global $db;
    $query = 'SELECT Username FROM users
              WHERE Username = :username';    
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();    
    $user = $statement->fetch();
    
	if (empty($user)) {return 0;}
	else {return 1;}
}

function check_login($username, $password) {
    
	if (check_username($username)) {
	global $db;
    $query = 'SELECT Password FROM users
              WHERE Username = :username';    
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();    
    $pass = $statement->fetch();
	if ($pass[0] == $password) {
		return true;
	}
	else {
		return false;
	}
	}
	else {
		return false;
	}
}

function add_user($username, $password, $email) {
    global $db;
    $query = 'INSERT INTO users
                 (Username, Password, Email)
              VALUES
                 (:username, :password, :email)';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $statement->closeCursor();
}
?>