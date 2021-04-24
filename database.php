<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_management_system";

$connection = mysqli_connect($servername, $username, $password);

if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
  echo "Error";
}
else {
	$db = mysqli_select_db($connection, "student_management_system");
}
?>