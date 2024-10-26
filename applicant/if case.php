<?php
if ($parr == 'Female' && $family == 'Total_Orphan' && $status=='Approved') {
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
    ?>