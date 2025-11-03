<?php
session_start();

// Nếu chưa đăng nhập thì đá về login
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}

// Lấy tên người dùng ra
$user = htmlspecialchars($_SESSION['user']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <h1>Hallo and welcome, <?php echo $user; ?>!</h1>

    <form action="logout.php" method="post">
        <button type="submit">Logout</button>
    </form>
</body>
</html>
