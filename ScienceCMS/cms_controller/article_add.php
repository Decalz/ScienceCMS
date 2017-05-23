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
	</tr>
	
<?php
}
?>

</table>

