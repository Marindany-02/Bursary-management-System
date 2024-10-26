<?php
	require_once 'connect.php';
	if ($_POST['userPass'] == $_POST['userCoPass']) {
	$adm=mysqli_escape_string($conn,$_POST['adm']);
	$firstname = mysqli_escape_string($conn,$_POST['userFirstname']);
	$lastname = mysqli_escape_string($conn,$_POST['userLastname']);
	$email = mysqli_escape_string($conn,$_POST['userEmail']);
	$phone = mysqli_escape_string($conn,$_POST['userPhone']);
	$dob = mysqli_escape_string($conn, $_POST['userbod']);
	$gender = mysqli_escape_string($conn,$_POST['userGender']);
	$education = mysqli_escape_string($conn,$_POST['userEduLevel']);
	$school = mysqli_escape_string($conn,$_POST['userSchool']);
	$bank = mysqli_escape_string($conn,$_POST['bank']);
	$family = mysqli_escape_string($conn,$_POST['parents']);
	$constituency = mysqli_escape_string($conn,$_POST['userCounty']);
	$ward = mysqli_escape_string($conn,$_POST['userConst']);
	$password = mysqli_escape_string($conn,$_POST['userPass']);
	$role = 0;
	$targetFilePath = ""; // Set an empty file path if no file is uploaded

   if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
	   $file = $_FILES['file'];
	   $filename = $file['name'];
	   $tempFilePath = $file['tmp_name'];

	   // Process and store the file, e.g., move it to a desired directory
	   $targetDir = 'uploads/';
	   $uniqueFilename = uniqid() . '_' . $filename;
	   $targetFilePath = $targetDir . $uniqueFilename;
	   move_uploaded_file($tempFilePath, $targetFilePath);
   }
	$q_check = $conn->query("SELECT * FROM `users` WHERE `email` = '$email'") or die(mysqli_error($conn));
	$v_check = $q_check->num_rows;
	if($v_check > 0){
		echo 'Exist';
	}else{
	$query = $conn->query("INSERT INTO `users` (`adm`,`firstname`, `lastname`, `email`, `phone`, `dob`, `gender`, `edulevel`, `school`,`bank`, `constituency`, `ward`,`familystatus`, `password`, `role`,`family`,`status`)
    VALUES ('$adm','$firstname', '$lastname', '$email', '$phone', '$dob', '$gender', '$education', '$school','$bank', '$constituency', '$ward','$targetFilePath', '$password', '$role','$family','Pending')") or die(mysqli_error($conn));
		if($query){
			echo "Success";
		}else{
			echo "Registration Failed!";
		}
	}
	
	}else{
	echo "notmatch";
   }


   $targetFilePath = ""; // Set an empty file path if no file is uploaded

   if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
	   $file = $_FILES['file'];
	   $filename = $file['name'];
	   $tempFilePath = $file['tmp_name'];

	   // Process and store the file, e.g., move it to a desired directory
	   $targetDir = 'uploads/';
	   $uniqueFilename = uniqid() . '_' . $filename;
	   $targetFilePath = $targetDir . $uniqueFilename;
	   move_uploaded_file($tempFilePath, $targetFilePath);
   }



