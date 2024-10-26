<?php
	require_once 'connect.php';
	$admin_query = $conn->query("SELECT * FROM `users` WHERE `status` = 1 ") or die(mysqli_error($conn));
	$admin_valid = $admin_query->num_rows;
	if($admin_valid == 1){
		echo '<script>alert("Error: Can\'t delete if only one admin account is available")</script>';
		echo '<script>window.location = "adminAcc.php"</script>';
	}else{
		$conn->query("DELETE FROM `admin+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++6` WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error($conn));
		header('location:adminAcc.php');
	}	