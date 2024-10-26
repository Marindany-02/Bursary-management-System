<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `sms` WHERE `sms_id` = '$_REQUEST[sms_id]'") or die(mysqli_error());
	header('location:sms.php');
?>