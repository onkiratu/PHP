<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
	<title>Student Portal</title>
</head>
<body>
	<h1>Student Portal</h1>
	<?php
		if(isset($_GET['login'])){
			if($_GET['login'] == "error"){
				echo "<p style='color:red;'>Incorrect login details!</p>";
			}
		}
	?>
	<form action="login.php" method="post">
		<label for="id">ID:</label>
		<input type="text" id="id" name="id"><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" value="Login">
	</form>
	<br>
	<p>Don't have an account? <a href="register.php">Register here.</a></p>
	<p><a href="marks.php">View Your Marks</a></p>
</body>
</html>
