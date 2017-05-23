<?php
require('../model/database.php');
require('../model/cms_db.php');
require('../model/user_db.php');

$result = $db->prepare("SELECT * FROM sciencecms");
$result->execute();
?>
<table>
  <tr>
    <th>ID</th>
    <th>Title</th> 
    <th>Uploaded by</th>
	<th>Type</th>
    <th>Path</th>
  </tr>
<?php
while ($row = $result->fetch())
{ ?>
	<tr>
	<?php for ($i = 0; $i < sizeof($row)/2; $i++) {
		?><td><?php echo $row[$i]; ?> </td> <?php
	}; ?>
	<td><a href="<?php echo $row[4]; ?>" target="_blank">Open</a></td>
	<?php 
		if ($row[2] == $_GET['user']) {
			?> <td><a href="../view/edit_article_form.php?user=<?php echo $row[2]; ?>&id=<?php echo $row[0]; ?>">Edit</a></td> <?php
			?> <td><a href="../cms_controller/article_delete.php?user=<?php echo $row[2]; ?>&id=<?php echo $row[0]; ?>">Delete</a></td> <?php
		}
	?>
	</tr>
	
<?php
}
?>

</table>