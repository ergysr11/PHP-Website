<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
//Get user input from the form
$username = $_POST["username"];
$email = $_POST["email"];   
$password = $_POST["password"];
$mosha = $_POST["mosha"];
$image = $_FILES['image'];

var_dump($image());exit();
var_dump(date("d.m.Y H:i:s", time()));exit();



// Hash the password(use a strong hashing algorithm like bcrypt)
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Connect to the database (replace with your database credentials)
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "kursi";

$connection = new mysqli($servername, $db_username, $db_password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->contact_error);
}

//Insert user data into the database
$sql = "INSERT INTO users (username, email, password, mosha) VALUES(?, ?, ?, ?)";
$stmt = $connection->prepare($sql);
$stmt->bind_param("ssss", $username, $email, $hashedPassword, $mosha);

if ($stmt->execute()) {
    echo "Registration successful!";

} else{
    echo "Error: " . $stmt->error;
}

$stmt->close();
$connection->close();
}
