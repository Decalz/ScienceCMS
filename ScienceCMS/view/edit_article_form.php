<?php include 'header.php'; ?>
<main>
<?php 
global $id;
$id = $_GET["id"];
$user = $_GET["user"];
include 'edit_form.php';?>
</main>
<?php include 'footer.php'; ?>