<?php
session_start();

// Hủy toàn bộ session
session_unset();  // Xóa tất cả biến session
session_destroy(); // Hủy phiên làm việc

// Chuyển hướng về trang đăng nhập
header("Location: login.html");
exit();
?>
