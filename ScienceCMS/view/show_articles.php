<?php include 'header.php'; ?>

<main>
<h2>All Articles</h2>

<?php include '../cms_controller/index.php'; ?>
<br/><br/>
<a href="add_article_form.php?user=<?php echo $_GET['user'] ?>">Add new article</a>
<br/><br/>
<a href="../">Log out</a>
<br/><br/>
</main>

<?php include 'footer.php'; ?>