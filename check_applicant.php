<?php
session_start();
	require_once 'connect.php';
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = $conn->query("SELECT * FROM `users` WHERE `email` = '$email' && `password` = '$password'") or die(mysqli_error($conn));
	$valid = $query->num_rows;
	$fetch = $query->fetch_array();
	if($valid > 0){
		$role = $fetch['role'];
		if($role == 0){
          echo 'Student';
		}else if($role == 1){
          echo 'Admin';
		}
		$_SESSION['id'] = $fetch['id'];
		$_SESSION['firstname'] = $fetch['firstname'];
		$_SESSION['lastname'] = $fetch['lastname'];
		$_SESSION['ward'] = $fetch['ward'];
		$_SESSION['constituency']=$fetch['constituency'];
		$_SESSION['edulevel']=$fetch['edulevel'];
		
	}else{
		echo 'Error';
	}