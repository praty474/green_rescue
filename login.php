<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include 'connection.php';
  $user_email = $_POST['email'];
  $user_password = $_POST['password'];

  $sql = "SELECT * FROM `users` WHERE user_email = '$user_email' AND user_password = '$user_password'";

  $result = mysqli_query($conn, $sql);
  if ($result) {
    $num = mysqli_num_rows($result);
    if ($num > 0) {
      $_SESSION['user_email'] = $user_email;
      $_SESSION['user_password'] = $user_password;
      echo "<script>
                  alert('Login successful');
                  window.location.href = 'index.php';
                </script>";
    } else {
      if ($user_email == "admin" && $user_password == "admin") {
        header("Location: admins.php");
        exit;
      } else {
        echo "<script>alert('Invalid email or password');</script>";
      }
    }
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Green Rescue</title>
  <link rel="icon" type="image/x-icon" href="img/fav.png" />

  <!-- Font Awesome icons -->
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>

  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header>
    <h2 class="logo"><img src="img/logo.png" alt="" height="80px" /></h2>
    <nav class="navigation">
      <a href="index.php">Home</a>
      <a href="index.php#describe">Services</a>
      <a href="login.php" class="active">Login</a>
      <a href="payment.php">Donate</a>
      <a href="contact.html">Contact</a>
    </nav>
  </header>

  <img src="img/form/wave.png" alt="Wave" class="wave" />
  <img src="img/leaf.png" id="newleaf" />

  <div class="container">
    <div class="img">
      <img src="img/log.png" alt="Background" class="floating-img" />
    </div>
    <div class="login-content">
      <form action="" method="post" id="loginForm">
        <img src="img/form/avatar.svg" alt="Avatar" class="avatar" />
        <h2>Welcome</h2>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-envelope"></i>
          </div>
          <div>
            <h5>Email</h5>
            <input type="email" name="email" id="email" class="input" />
          </div>
        </div>
        <div class="input-div two">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div>
            <h5>Password</h5>
            <input type="password" name="password" id="password" class="input" />
          </div>
        </div>
        <!-- <a href="#">Forget Password?</a> -->
        <input type="submit" value="Login" class="btn" onclick="validateForm(event)" />
        <span>Don't have an account?
          <a href="Registration.php">Sign Up now</a></span>
      </form>
    </div>
  </div>

  <footer>
    <p>Copyright &copy;2023 Green Rescue</p>
  </footer>

  <script src="script.js"></script>
  <script>
    function validateForm(event) {
      event.preventDefault(); // Prevent form submission


      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;

      if (email === "" || password === "") {
        alert("Please fill in all fields");
        return false;
      }
      // If validation passes, you can proceed with form submission
      document.getElementById("loginForm").submit();
    }
  </script>
</body>

</html>