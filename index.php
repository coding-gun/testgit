<!DOCTYPE html>
<html>
<head>
	<title>this is my first git</title>
</head>
<body>
	<form method="post" action="">
		<label>Name</label>
		<input type="text" name="name">
		<input type="submit" name="submit">
	</form>
</body>
</html>

<?php 
	if (isset($_POST['submit'])) {
		$a = $_POST['name'];
		echo $a;
	}
?>