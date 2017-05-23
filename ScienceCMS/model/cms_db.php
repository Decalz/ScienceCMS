<?php
function get_articles_by_type($type) {
    global $db;
    $query = 'SELECT * FROM sciencecms
              WHERE Type = :type';
    $statement = $db->prepare($query);
    $statement->bindValue(":type", $type);
    $statement->execute();
    $articles = $statement->fetchAll();
    $statement->closeCursor();
    return $articles;
}

function get_article($articleID) {
    global $db;
    $query = 'SELECT * FROM sciencecms
              WHERE ScienceID = :articleID';
    $statement = $db->prepare($query);
    $statement->bindValue(":articleID", $articleID);
    $statement->execute();
    $articles = $statement->fetch();
    $statement->closeCursor();
    return $articles;
}

function add_article($title, $username, $type, $filepath) {
    global $db;
    $query = 'INSERT INTO sciencecms
                 (Title, Username, Type, Path)
              VALUES
                 (:title, :username, :type, :filepath)';
    $statement = $db->prepare($query);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':type', $type);
    $statement->bindValue(':filepath', $filepath);
    $statement->execute();
    $statement->closeCursor();
}

function update_article($articleID, $title, $username, $type, $filepath) {
    global $db;
    $query = 'UPDATE sciencecms
				SET Title= :title, Username= :username, Type= :type, Path= :filepath
                WHERE ScienceID= :articleID';
    $statement = $db->prepare($query);
	$statement->bindValue(":articleID", $articleID);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':type', $type);
    $statement->bindValue(':filepath', $filepath);
    $statement->execute();
    $statement->closeCursor();
}

function delete_article($articleID) {
    global $db;
    $query = 'DELETE FROM sciencecms
              WHERE ScienceID = :articleID';
    $statement = $db->prepare($query);
    $statement->bindValue(":articleID", $articleID);
    $statement->execute();
    $articles = $statement->fetch();
    $statement->closeCursor();
    return $articles;
}
?>