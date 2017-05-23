<?php
require('../model/database.php');
require('../model/cms_db.php');
require('../model/user_db.php');

$target_dir = "../articles/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$error_flag = 1;
$articleFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if file is an article or not
if(isset($_POST["submit"])) {
	$title = $_POST["title"];
	$type = $_POST["type"];
	$user = $_GET["user"];
	
    if($articleFileType == "docx" || $articleFileType == "pdf" || $articleFileType == "txt" || $articleFileType == "doc") {
        $error_flag = 1;
    } else {
        echo "File is not an article.";
        $error_flag = 0;
    }
	
// Check if file already exists
if (file_exists($target_file)) {
    echo "File already exists.";
    $error_flag = 0;
}
if ($error_flag == 0) {
    echo "Sorry, your article was not uploaded.";
// if everything is ok, try to upload the article
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		update_article($_GET['id'], $title, $user, $type, $target_file);
        echo "The article has been updated."; ?>
		<br/><br/><a href="../view/show_articles.php?user=<?php echo $_GET['user']?>">Back</a>
		<?php
    } else {
        echo "Sorry, there was an error updating your file.";
		?>
		<a href="../view/show_articles.php?user=<?php echo $_GET['user']?>">Back</a>
		<?php
    }
}
}
?>