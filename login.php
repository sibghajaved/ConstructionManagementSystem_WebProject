<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body {
      background-image: url('img5.webp');
      background-size: cover;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      color: #ffffff; 
      background-repeat: no-repeat;
    }
  </style>
  <script>
    function validateForm() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;

      if (username === "" || password === "") {
        alert("Both username and password must be filled out");
        return false;
      }
      return true;
    }
  </script>
</head>
<body>
  <div class="header">
    <h2>Login</h2>
  </div>

  <div class="container mt-5">
  <form method="post" action="login.php" name="loginForm" onsubmit="return validateForm()">
    <?php include('errors.php'); ?>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary" name="login_user">Login</button>
    </div>
    <p>
      Not yet a member? <a href="register.php" style="font-size: 25px;">Sign up</a>
    </p>
  </form>
</div>
</body>
</html>
