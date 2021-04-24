<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="mid-div">
	<center>
		<h1 class="lav">Student Login Page</h1>
		<form action="" method="POST">
			<input class="lav" type="email" name="email" placeholder="Email" required>
			<input class="lav" type="password" name="password" placeholder="Password" required>
			<input class="lav" type="submit" name="student_login" value="Login">
		</form>
		<?php
			session_start();
			include "database.php";
			if(isset($_POST['student_login'])){
				$query = "SELECT * FROM students WHERE email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				if ($row = mysqli_fetch_assoc($query_run)) {
					if($row['password'] == $_POST['password']){
						$_SESSION['name'] = $row['name'];
						$_SESSION['roll_no'] = $row['roll_no'];
						$_SESSION['email'] = $row['email'];
						header("Location: student_dashboard.php");
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