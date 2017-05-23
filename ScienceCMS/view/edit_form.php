<form action="../user_controller/edit.php?user=<?php echo $user; ?>&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
	<label>Title:</label>
        <input type="text" name="title" /> 
        <br/>
		<br/>
	<label>Type:</label>
        <input type="text" name="type" />
        <br/>
		<br/>
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
</form>