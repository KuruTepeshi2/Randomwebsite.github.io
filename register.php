<?php

$servername = "localhost";
$username = "root";   
$password = "";       
$dbname = "register_db";  

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql_create_table = "
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($sql_create_table);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password']; 

   $sql_insert = "INSERT INTO users (username, password, email) 
               VALUES ('$user', '$pass', '$email')";

if ($conn->query($sql_insert) === TRUE) {
    echo "<script>alert('Succesful!'); window.location.href='login.html';</script>";
} else {
    echo "error: " . $conn->error;
}
}

$conn->close();
?>
