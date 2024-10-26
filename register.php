<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    //RETRIEVE USER INPUT
    $name = $_POST["name"];
    $gender=$_POST["gender"];
    $email = $_POST["email"];
    $birth = $_POST["birth"];
    $password =$_POST["password"];

    //validating user input
    if(empty($name)||empty($gender)||empty($email)||empty($birth)||empty($password)){
        echo "all fields are required";
    }
    else{
        //hash password
        $hashedpassword = password_hash($password, PASSWORD_BCRYPT);
        //Connect to database
        $dbHost = "localhost";
        $dbUser = "pma";
        $dbPassword = "";
        $dbName = "bursary";
        $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

        //check connection
        if($conn->connect_error){
            die("connection failed:" .$conn->connect_error);
        }
        //insert users into database
        $sql = "INSERT INTO users(name,gender,email,birth,password) VALUES(?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss",$name,$gender,$email,$birth,$hashedpassword);
        if($stmt->execute()){
            echo "registration successful";
            header("location: login.html");
            exit;
        }
        else{
            echo "registration failed.please try again.";
        }
        //close database connection
        $conn->close();
    }
}
?>