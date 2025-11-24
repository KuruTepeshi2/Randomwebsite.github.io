<?php
session_start();


if (!isset($_SESSION['user']) || $_SESSION['user'] !== 'Admin') {
    
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="admin.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    
    <title>Admin Secret</title>
</head>
<body>
    <div class="taskbar">
        <div class="tbfunction">
            <a href="#Me">About Me</a>
            <a href="https://www.youtube.com/watch?v=sxcAXamuyR4">Money</a>
            <a href="H0wT0RUn_PHP1N_H7ML.html">Code</a>
            <a href="Music.html">Music</a>
        </div>
        <div class="tbavt">
            <img alt="myAvatar" src="khoidang.png"> 
        </div>
    </div>

    <div class="content">
        <div class="myavtar">
            <img src="mambo.gif">
        </div>
        <div class="aboutme">
            <h1>You’re completed my challenge nigga!</h1>
            <p> 
                So, the secret code is in the 'Code' tab — check the top bar to find it.<br>
            
                btw you can click the "Money" tag to claim the money faster!
            </p>
        </div>
        <div class="classinput">
            <p>Enter the code that you find in the box below to check it :3</p>
            <input id="codeInput" type="text" placeholder="Code check">
            <button onclick="checkCode()">Check</button>
        </div>
        <!-- i use chatGPT for this -->
        <script>

async function sha256(text) {
    const encoder = new TextEncoder();
    const data = encoder.encode(text);
    const hashBuffer = await crypto.subtle.digest("SHA-256", data);
    const hashArray = Array.from(new Uint8Array(hashBuffer));
    const hashHex = hashArray.map(b => b.toString(16).padStart(2, "0")).join("");
    return hashHex;
}

async function checkCode() {
    const input = document.getElementById("codeInput").value.trim();
    const targetHash = "11ed86e9643c916030f6dbcdc4f221a614e1ac776c6db8dd6772fda713c44045";

    const result = await sha256(input);

    if (result === targetHash) {
        alert("U got me nigga!");
    } else {
        alert("Try again bro");
    }
}
</script>
    </div>
</body>
</html>