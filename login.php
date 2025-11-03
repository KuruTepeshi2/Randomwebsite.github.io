<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register_db";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $user = $_POST['username'];
    $pass = $_POST['password'];

    
    $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
         $_SESSION['user'] = $user;
        header("Location:Home.php");
        exit();
    } else {
        echo "<script>alert('nice try nigga!'); window.location.href='login.html';</script>";
    }
}

$conn->close();
?>
