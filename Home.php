<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}
$user = htmlspecialchars($_SESSION['user'], ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" type="image/png" href="ulala.jpg">
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="container">
        <h1>Hallo and welcome, <?php echo htmlspecialchars($user); ?>!</h1>
        <h2>Maybe you will find somthing here : )</h2>
        <h3>Btw say hi to my Doto :3</h3>
        <img src="doto.jpg" alt="ulala">

        <form action="logout.php" method="POST">
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>
</body>
</html>


