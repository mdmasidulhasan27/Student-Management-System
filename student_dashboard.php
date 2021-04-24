<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php
		session_start(); 
		include "database.php";
	?>
</head>
<body class="mid-div">
	<div class="lav">
		<center>
			<h1>Student Page</h1>
			<h3>......................................................................................................................................
				<?php echo $_SESSION['name'];?>____<?php echo $_SESSION['roll_no'];?>&nbsp;&nbsp;&nbsp;
				[[<?php echo $_SESSION['email'];?>]]&nbsp;&nbsp;&nbsp;
				<a href="logout.php">Logout</a>
			</h3>
		</center>
	</div>
	<div class="lav">
		<form action="" method="POST">
			<table>
				<tr>
					<td>
						<input class="lav" type="submit" name="edit_my_data" value="Edit My Data">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div class="right-side">
		<div>

			<!-- student searching part -->
			<?php
				$query = "SELECT * FROM students  WHERE roll_no = '$_SESSION[roll_no]'";
				$query_run = mysqli_query($connection, $query);
				if($row = mysqli_fetch_assoc($query_run)){
					?>
					<table class="show-data">
						<tr>
							<td class="show-data">
								<b>Roll No:</b>&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
							<td>
								<?php echo $row['roll_no']; ?>
							</td>
						</tr>
						<tr>
							<td class="show-data">
								<b>Student Name:</b>&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
							<td>
								<?php echo $row['name']; ?>
							</td>
						</tr><br>
						<tr>
							<td class="show-data">
								<b>Father's Name:</b>&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
							<td>
								<?php echo $row['father_name']; ?>
							</td>
						</tr>
						<tr>
							<td class="show-data">
								<b>Class:</b>&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
							<td>
								<?php echo $row['class']; ?>
							</td>
						</tr>
						<tr>
							<td class="show-data">
								<b>Mobile:</b>&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
							<td>
								<?php echo $row['mobile']; ?>
							</td>
						</tr>
						<tr>
							<td class="show-data">
								<b>Email:</b>&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
							<td>
								<?php echo $row['email']; ?>
							</td>
						</tr>
						<tr>
							<td class="show-data">
								<b>Remark:</b>&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
							<td>
								<?php echo $row['remark']; ?>
							</td>
						</tr>
					</table>
					<?php
				}
			?>

			<!-- student editing part -->
			<?php
				if(isset($_POST['edit_my_data'])){
					?>
					<form action="update_by_student.php" method="POST">
							<table class="show-data">
								<tr>
									<td>
										<b>Student Name:</b>&nbsp;&nbsp;&nbsp;&nbsp;
									</td>
									<td>
										<input class="button-style" name="name" type="text" value="<?php echo $row['name']; ?>">
									</td>
								</tr><br>
								<tr>
									<td>
										<b>Father's Name:</b>&nbsp;&nbsp;&nbsp;&nbsp;
									</td>
									<td>
										<input class="button-style" name="father_name" type="text" value="<?php echo $row['father_name']; ?>">
									</td>
								</tr>
								<tr>
									<td>
										<b>Class:</b>&nbsp;&nbsp;&nbsp;&nbsp;
									</td>
									<td>
										<input class="button-style" name="class" type="text" value="<?php echo $row['class']; ?>">
									</td>
								</tr>
								<tr>
									<td>
										<b>Mobile:</b>&nbsp;&nbsp;&nbsp;&nbsp;
									</td>
									<td>
										<input class="button-style" name="mobile" type="text" value="<?php echo $row['mobile']; ?>">
									</td>
								</tr>
								<tr>
									<td>
										<b>Email:</b>&nbsp;&nbsp;&nbsp;&nbsp;
									</td>
									<td>
										<input class="button-style" name="email" type="email" value="<?php echo $row['email']; ?>">
									</td>
								</tr>
								<tr>
									<td>
										<b>Password:</b>&nbsp;&nbsp;&nbsp;&nbsp;
									</td>
									<td>
										<input class="button-style" name="password" type="text" value="<?php echo $row['password']; ?>">
									</td>
								</tr>
								<tr>
									<td>
									</td>
									<td>
										<input class="button-style" type="submit" name="update" value="save">
									</td>
								</tr>
							</table>
						</form>
					<?php
				}
			?>
		</div>
	</div>
</body>
</html>