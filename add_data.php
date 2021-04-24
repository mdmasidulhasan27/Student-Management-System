<?php
	include "database.php";
	$query = "INSERT INTO `students`(`s_no`, `roll_no`, `name`, `father_name`, `class`, `mobile`, `email`, `password`, `remark`) VALUES ('',$_POST[roll_no],$_POST[name],$_POST[father_name],$_POST[class],$_POST[mobile],$_POST[email],$_POST[password],$_POST[remark])";
	$query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
	window.location.href = "admin_dashboard.php";
	alert("Student Data Added Successfully");
</script>