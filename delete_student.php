<?php
	require_once 'connect.php';
	$conn->query("UPDATE `students` SET `admin_id` = '0' WHERE id = '$_REQUEST[student_id]'") or die(mysqli_error());
	header('location:students_details.php');
?>