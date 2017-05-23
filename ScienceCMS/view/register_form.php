<?php include 'header.php'; 
 if (isset($_GET["error"])) {
	 $error = $_GET["error"];
 }
 else {
	 $error = "";
 }
?>

<main>
<h1>Register</h1>

<div id="center">
<form action="../user_controller/user_register.php" method="post">
<font color="red"> <?php echo $error; ?> </font>
<br/><br/>
    <label>Username:</label>
        <input type="text" name="username" /> 
        <br/>
		<br/>
	<label>Password:</label>
        <input type="password" name="password" />
        <br/>
		<br/>
	<label>Email:</label>
        <input type="text" name="email" />
        <br/>
		<br/>
	<label>&nbsp;</label>
        <input type="submit" value="Register" />
        <br/>
		<br/>
</form>
<a href="../">Back</a>
</div>
</main>

<?php include 'footer.php'; ?>