<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'connection.php';
    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE user_email = '$user_email'";
    $result = mysqli_query($conn, $sql);
    if($result){
        $num = mysqli_num_rows($result);
        if($num > 0){
            echo "<script>alert('email already exists');</script>";
        } else {
            // $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
            $sql = "INSERT INTO `users` (user_name, user_email, user_password) values('$user_name', '$user_email', '$user_password')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "<script>
                        alert('Sign up successful');
                        window.location.href = 'login.php';
                     </script>;";
            } else {
                echo "<script>alert('ERROR occured');</script>";
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

    <!-- Font Awesome icons -->
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <link rel="stylesheet" href="style.css" />
    
  </head>

  <body>
    <header>
    <h2 class="logo"><img src="img/logo.png" alt="" height="90px" /></h2>
      <nav class="navigation">
        <a href="index.php">Home</a>
        <a href="#">Services</a>
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
        <form action="" method="post" id="registrationForm">
          <img src="img/form/avatar.svg" alt="Avatar" class="avatar" />
          <h2>Registration</h2>

          <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div>
              <h5>Name</h5>
              <input type="text" name="name" id="name" class="input" />
            </div>
          </div>

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
              <input
                type="password"
                name="password"
                id="password"
                class="input"
              />
            </div>
          </div>
          <div class="input-div two">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div>
              <h5>Confirm Password</h5>
              <input
                type="password"
                name="cpassword"
                id="cpassword"
                class="input"
              />
            </div>
          </div>

          <input type="submit" value="Sign Up" class="btn" onclick="validateForm(event)"/>
          <span
            >Already have an account? <a href="login.php">Login now</a></span
          >
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

        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var cpassword = document.getElementById("cpassword").value;

        if (name === "" || email === "" || password === "" || cpassword === "") {
          alert("Please fill in all fields");
 
          return false;
        }
        var name = document.getElementById("name").value;
        var containsNumbers = /\d/.test(name);

        if (containsNumbers) {
        alert("Name cannot contain numbers");
        return false;
        }
    
        if (password.length < 6) {
          alert("Password should be at least 6 characters long");

          return false;
        }

        if (password !== cpassword) {
          alert("Passwords do not match");
          return false;
        }

        // If validation passes, you can proceed with form submission
        document.getElementById("registrationForm").submit();
      }
    </script>
  </body>
</html>
