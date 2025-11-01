<?php
// Thông tin kết nối MySQL
$servername = "localhost";
$username = "root";   // đổi nếu MySQL ông có user khác
$password = "";       // mật khẩu MySQL (nếu có thì điền vào đây)
$dbname = "register_db";  // tên database (tạo trước trong phpMyAdmin)

// Kết nối MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Tạo bảng nếu chưa có
$sql_create_table = "
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($sql_create_table);

// Lấy dữ liệu từ form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password']; // Giữ nguyên, không mã hóa

    // Chèn dữ liệu vào bảng
    $sql_insert = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql_insert);
    $stmt->bind_param("sss", $user, $pass, $email);

    if ($stmt->execute()) {
        echo "<script>alert('Đăng ký thành công!'); window.location.href='login.html';</script>";
    } else {
        echo "Lỗi: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
