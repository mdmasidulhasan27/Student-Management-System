<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="mid-div">
	<center>
		<h1 class="lav">Student Management System</h1>
		<form action="" method="POST">
			<input class="lav" type="submit" name="admin_login" value="Admin Login">
			<input class="lav" type="submit" name="student_login" value="Student Login">
		</form>
		<?php
			if(isset($_POST['admin_login'])){
				header("Location: admin_login.php");
			}

			if(isset($_POST['student_login'])){
				header("Location: student_login.php");
			}
		?>
	</center>
</body>
</html>