<?php
	include "database.php";
	session_start();
	$query = "UPDATE students set name='$_POST[name]', father_name='$_POST[father_name]', class='$_POST[class]', email='$_POST[email]', mobile='$_POST[mobile]' WHERE roll_no = $_SESSION[roll_no]";
	$query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
	window.location.href = "student_dashboard.php";
	alert("Updated Successfully");
</script>