<?php
	require_once 'connect.php';
	if(ISSET($_POST['save_sms'])){
		$sms_group = $_POST['sms_group'];

		$act_query = $conn->query("SELECT * FROM `applicants` WHERE `status` = '$sms_group' ") or die(mysqli_error($conn));
        while($act_fetch = $act_query->fetch_array()){
            $applicant_id = $act_fetch['id'];
        	$name = $act_fetch['firstname'].' '.$act_fetch['lastname'];
        	$message = $_POST['message'];
        	$datetime = date("Y/m/d");

        	$conn->query("INSERT INTO `sms` VALUES('', '$name', '$message', '$datetime', '$applicant_id')") or die(mysqli_error($conn));
        	header('location:sms.php');
        }

		
		
		
	}
?>