<?php
require 'function.php';

// if (isset($_SESSION["id"])) {
//     header("Location: buatgame/index.php");
// }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;600;900&display=swap" rel="stylesheet">
</head>

<body style=" background-size: cover;  background-image: url(asset/bglogin.gif)">
<div class="title">
      <label>FROG ADVENTURE</label>
</div>

    <div class="zan-login">
        <div class="isi-left">
            <img src="asset/Frog Games.png" alt="">
        </div>
        <div class="isi-right">
            <h2 class="judul-login">Login</h2>
            <form autocomplete="off" action="" method="post">
                <input type="hidden" id="action" value="login">
                <label for="">Username</label>
                <input type="text" id="username" value="" placeholder="username.."> <br>
                <label for="">Password</label>
                <input type="password" id="password" value="" placeholder="password.."> <br>
                <button type="button" onclick="submitData();" style=" margin-top: 5%;  margin-left: 20%; background: linear-gradient(to right, #11998e, #38ef7d); border: none; border-radius: 10px; color: white; width: 150px; height: 35px; font-weight: bold;">Login</button>
            </form>
            <div class="dont-login">
            <br >
            <label for="" >Don’t have an account?</label>
            <a href="register.php">Go To Register</a>
            <?php require 'script.php'; ?>
            </div>
        </div>
    </div>
</body>

</html>