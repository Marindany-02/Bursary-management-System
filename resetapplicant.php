<?php
session_start();
	require_once 'connect.php';
	$email = $_POST['email'];
	$adm = $_POST['adm'];
    $password=$_POST['password'];
	$query = $conn->query("SELECT * FROM `users` WHERE `email` = '$email' && `adm` = '$adm'") or die(mysqli_error($conn));
	$valid = $query->num_rows;
	$fetch = $query->fetch_array();
	if($valid > 0){
        $conn->query("UPDATE `users` SET `password` = '$password' WHERE `email` = '$email' && `adm` = '$adm'") or die(mysqli_error($conn));
        echo 'successful reset your password';
		header('location:login.php');
	}else{
		echo 'The email and adm provided does not match';
	}