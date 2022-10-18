<?php
require 'function.php';
if (isset($_SESSION["id"])) {
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="style.css">
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;600;900&display=swap" rel="stylesheet">
  <!-- bs -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

    
<body style=" font-family: 'Montserrat', sans-serif; background-size: cover; background-attachment: fixed; background-image: url(asset/bgregist.gif);">

<div class="title">
      <label style=" font-weight: bold;">FROG ADVENTURE</label>
</div>

  <div class="zan-regist">
    <h2>Register</h2>
    <!-- <form autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="register">
      <label for="">Name</label>
      <input type="text" id="name" value=""> <br>
      <label for="">Username</label>
      <input type="text" id="username" value=""> <br>
      <label for="">Password</label>
      <input type="password" id="password" value=""> <br>
      <button type="button" onclick="submitData();">Register</button>
    </form> -->
    <form>
      <div class="mb-3">
        <input type="hidden" id="action" value="register">
        <label for="exampleInputEmail1" class="form-label">FullName</label>
        <input type="text" class="form-control" id="name" value="" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="axel" class="form-label">Username</label>
        <input type="text" id="username" value="" class="form-control" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Used for sign in to all our games.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" value="">
      </div>
      <button type="button" onclick="submitData();" class="btn btn-primary" style="background: linear-gradient(to right, #11998e, #38ef7d); border: none;">Submit</button>
    </form>

    <br>
    <div class="dont-login">
      <label for="">ALREADY HAVE AN ACCOUNT?</label>
    <a href="login.php">Go To Login</a>
    <?php require 'script.php'; ?>
    </div>
  </div>

  <div class="sub">
    <h2>CREATE AN <br>ACCOUNT</h2>
  </div>
  
  <div class="desc">
    <a href="" style="width: fit-content;"><label for="">SUPPORT</label> </a>
    <a href="" style=" margin-left: 25px; margin-right: 25px;"><label for="">PRIVACY NOTICE</label> </a>
    <a href="" style= "margin-right: 25px;"><label for="">TERMS OF SERVICE</label> </a>
    <a href="" style="width: fit-content;"><label for="">COOKIE PREFERENCES</label> </a> 
 
  </div>

  <div class="foot">
    <p>© 2020 RIOT GAMES. ALL RIGHTS RESERVED. <br> THIS SITE IS PROTECTED BY HCAPTCHA AND ITS <a href="">PRIVACY POLICY</a>  AND TERMS OF <a href="">SERVICE</a>  APPLY.</p>
  </div>

</body>
</html>