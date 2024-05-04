<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    .error{
      color:red;
    }
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
      var username = document.forms["registrationForm"]["username"].value;
      var email = document.forms["registrationForm"]["email"].value;
      var password1 = document.forms["registrationForm"]["password_1"].value;
      var password2 = document.forms["registrationForm"]["password_2"].value;

      // Check if fields are empty
      if (username === "") {
        document.getElementById("username-error").innerHTML = "Username is required";
        return false;
      } else {
        document.getElementById("username-error").innerHTML = "";
      }

      if (email === "") {
        document.getElementById("email-error").innerHTML = "Email is required";
        return false;
      } else {
        document.getElementById("email-error").innerHTML = "";
      }

      if (password1 === "") {
        document.getElementById("password-error").innerHTML = "Password is required";
        return false;
      } else {
        document.getElementById("password-error").innerHTML = "";
      }

      // Check password length, uppercase letter, and special character
      if (password1.length < 8 || !/[A-Z]/.test(password1) || !/[!@#$%^&*(),.?":{}|<>]/.test(password1)) {
        document.getElementById("password-error").innerHTML = "Password must be at least 8 characters long, include one uppercase letter, and one special character";
        return false;
      } else {
        document.getElementById("password-error").innerHTML = "";
      }

      // Check if passwords match
      if (password1 !== password2) {
        document.getElementById("password-error").innerHTML = "Passwords do not match";
        return false;
      } else {
        document.getElementById("password-error").innerHTML = "";
      }

      return true;
    }
  </script>
</head>
<body>
  <div class="header">
    <h2>Register</h2>
  </div>

 


  <div class="container mt-5">
  <form method="post" action="register.php" onsubmit="return validateForm()" name="registrationForm">
    <?php include('errors.php'); ?>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" value="<?php echo $username; ?>">
      <div id="username-error" class="error"></div>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo $email; ?>">
      <div id="email-error" class="error"></div>
    </div>
    <div class="form-group">
      <label for="password_1">Password</label>
      <input type="password" class="form-control" id="password_1" name="password_1" placeholder="Enter password">
      <div id="password-error" class="error"></div>
    </div>
    <div class="form-group">
      <label for="password_2">Confirm Password</label>
      <input type="password" class="form-control" id="password_2" name="password_2" placeholder="Confirm password">
    </div>
    <button type="submit" class="btn btn-primary" name="reg_user">Register</button>
    <p style="color:black;">
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>

</body>
</html>

 





