<?php
$servername = "localhost";
$username = "root";      // user MySQL ông dùng
$password = ""; // đổi chỗ này
$dbname = "users";

// Kết nối MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

// Băm mật khẩu (bảo mật)
$hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

// Chuẩn bị câu lệnh SQL
$sql = "INSERT INTO users (username, password, email) VALUES ('$user', '$hashed_pass', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "✅ Đăng ký thành công!";
} else {
    echo "❌ Lỗi: " . $conn->error;
}

$conn->close();
?>
