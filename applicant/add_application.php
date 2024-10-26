<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../connect.php';
$s_query = $conn->query("SELECT * FROM `users` WHERE `id` = '$_SESSION[id]' && `status` = 'Approved' ") or die(mysqli_error($conn));
    $s_fetch = $s_query->fetch_array();
    $email = $s_fetch['email'];

    $sqlSelect = "SELECT * FROM applicants WHERE email='$email'";
$result = $conn->query($sqlSelect);
if ($result->num_rows > 0) {

    echo "You have already applied for the bursary with this email address.";
} else{

if (isset($_POST['save_application'])) {
    $b_query = $conn->query("SELECT `title` FROM `bursaries` WHERE `bursary_id` = '$_REQUEST[activity_id]'") or die(mysqli_error($conn));
    $b_fetch = $b_query->fetch_array();
    $bursary_title=$b_fetch['title'];
    //$bursary_title = $b_fetch['title'];
    $adm =$s_fetch['adm'];
    $firstname = $s_fetch['firstname'];
    $lastname = $s_fetch['lastname'];
    $phone = $s_fetch['phone'];
    $gender = $s_fetch['gender'];
    $edulevel = $s_fetch['edulevel'];
    $school = $s_fetch['school'];
    $bank=$s_fetch['bank'];
    $constituency = $s_fetch['constituency'];
    $ward = $s_fetch['ward'];
    $family = $s_fetch['family'];
    $status = $s_fetch['status'];



    // Calculate bursary amount based on criteria
// Calculate bursary amount based on criteria
if ($gender == 'Female' && $family == 'Total_Orphan' && $status=='Approved') {
    $bursaryAmount = 10000;
} elseif ($gender == 'Female' && $family == 'Single_Parent' && $status=='Approved') {
    $bursaryAmount = 8000;
}
elseif ($gender == 'Female' && $family == 'Both_Alive' && $status=='Approved') {
    $bursaryAmount = 6000;
}
elseif ($gender == 'Male' && $family == 'Single_Parent' && $status=='Approved') {
    $bursaryAmount = 9000;
}
elseif ($gender == 'Male' && $family == 'Partial_Orphan' && $status=='Approved') {
    $bursaryAmount = 7000;
}
elseif($gender == 'Male' && $family == 'Both_Alive' && $status=='Approved') {
    $bursaryAmount = 5000;
}

if($email1==$email){
    echo "email already exist";
}
else{
    
        // Call a  to allocate bursary based on criteria
    $conn->query("INSERT INTO `applicants` VALUES ('','$adm','$firstname', '$lastname', '$email','$gender','$constituency', '$ward','$school','$edulevel',  '$family','$bursary_title','$status','$_REQUEST[activity_id]', '$phone','$bank','$bursaryAmount',NOW())") or die(mysqli_error($conn));
        header("location:index.php");
    } 
    
        
}
}
 
?>





