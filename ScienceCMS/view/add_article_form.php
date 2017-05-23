<?php include 'header.php'; ?>
<main>
<?php 
global $user;
$user = $_GET["user"];
include 'upload_form.php';?>
</main>
<?php include 'footer.php'; ?>