<?php
	include "database.php";
	$query = "UPDATE students set roll_no='$_POST[roll_no]', name='$_POST[name]', father_name='$_POST[father_name]', class='$_POST[class]', email='$_POST[email]', mobile='$_POST[mobile]', remark='$_POST[remark]' WHERE roll_no = $_POST[roll_no]";
	$query_run = mysqli_query($connection, $query);
?>
<script type="text/javascript">
	window.location.href = "admin_dashboard.php";
	alert("Updated Successfully");
</script>