<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `bursaries` WHERE `bursary_id` = '$_REQUEST[bursary_id]'") or die(mysqli_error($conn));
	header('location:home.php');
?>