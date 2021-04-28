<!DOCTYPE html>
<head>
    <meta charset="en">
    <link rel="stylesheet" href="CSS/register.css">
    <title>Sign in</title>
</head>
<header>
    <h1 class = "title">
      <a href="MYP_main.php"><img src="img/chemtestlogo.png" class="logot"></a>Letovo 
    </h1>
</header>
<body>
  <div class="navbar">
    <a href="#home">About the site</a>
    <a href="patchnotes.html">Patchnotes</a>
    <div class="dropdown">
      <button class="dropbtn">Dropdown 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="grade_7.html">Grade 7</a>
        <a href="#">Grade 8</a>
        <a href="#">Grade 9</a>
      </div>
    </div>
  </div>
  <form action="login.php" method="POST">
    <div class="container">
      <h1>Log in</h1>
      <?php require_once 'messages.php'; ?>
      <p>Please fill in this form to log in your account.</p>
      <hr>
  
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter username" name="username" id="username" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="password" required>
      <hr>
  
      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
      <button type="submit" class="registerbtn">Log in</button>
    </div>
  </form>
  <div class="container signin">
    <p>No account? <a href="registerform.php">Register</a>.</p>
  </div>
</body>
<footer>
    <p>This site is a prototype<br>Made by Mikhail Bazarsadaev, 2021</p>
</footer>
