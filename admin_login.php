<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="mid-div">
	<center>
		<h1 class="lav">Admin Login Page</h1>
		<form action="" method="POST">
			<input class="lav" type="email" name="email" placeholder="Email" required>
			<input class="lav" type="password" name="password" placeholder="Password" required>
			<input class="lav" type="submit" name="admin_login" value="Login">
		</form>
		<?php
		session_start();
		include "database.php";
		$name = "";
		$email = "";
			if(isset($_POST['admin_login'])){
				$query = "SELECT * FROM login WHERE email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				if ($row = mysqli_fetch_assoc($query_run)) {
					if($row['password'] == $_POST['password']){
						$_SESSION['name'] = $row['name'];
						$_SESSION['email'] = $row['email'];
						header("Location: admin_dashboard.php");
					}
					else {
						echo "Wrong Password";
					}
				}
				else {
					echo "Email Doesn't Mathc";
				}
			}
		?>
	</center>
</body>
</html>