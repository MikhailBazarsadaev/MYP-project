<!DOCTYPE html>
<head>
    <meta charset="en">
    <link rel="stylesheet" href="CSS/register.css">
    <title>Main page</title>
</head>
<header>
    <h1 class = "title">
      <a href="index.php"><img src="img/chemtestlogo.png" class="logot"></a>Letovo 
      <?php 
      session_start();
      if (array_key_exists('id', $_SESSION) == TRUE): ?> <a class="my-profile" href="my-profile.php">My profile</a><?php endif; ?>
    </h1>
</header>
<body>
  <div class="navbar">
    <a href="about-site.php">О сайте</a>
    <a href="patchnotes.html">О разработчике</a>
    <div class="dropdown">
      <button class="dropbtn">Классы 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="grade_7.php">7 класс</a>
        <a href="#">8 класс</a>
        <a href="#">9 класс</a>
      </div>
    </div>
    <?php 
    if (array_key_exists('id', $_SESSION) == FALSE): ?> <a href="registerform.php" style="float: right;">Регистрация</a><?php endif; ?> 
  </div>
  <form action="action_page.php" method="POST">
    <div class="container">
      <h1>Регистрация</h1>
      <?php require_once "messages.php"; ?>
      <p>Пожалуйста, заполните эту форму для того чтобы создать аккаунт.</p>
      <hr>
      
      <label for="email"><b>Имя пользователя</b></label>
      <input type="text" placeholder="Введите имя пользователя" name="username" id="username" required>

      <label for="email"><b>Почта</b></label>
      <input type="text" placeholder="Введите почту" name="email" id="email" required>
  
      <label for="psw"><b>Пароль</b></label>
      <input type="password" placeholder="Введите пароль" name="password" id="password" required>
  
      <label for="psw-repeat"><b>Повторите пароль</b></label>
      <input type="password" placeholder="Введите тот же пароль" name="password_confirm" id="password_confirm" required>
      <hr>
  
      <p>Создавая аккаунт, вы соглашаетесь с нашей политикой<a href="#">Terms & Privacy</a>.</p>
      <button type="submit" class="registerbtn">Register</button>
    </div>
  </form>
  <div class="container signin">
    <p>Already have an account? <a href="signin.php">Sign in</a>.</p>
  </div>
</body>
<footer>
    <p>This site is a prototype<br>Made by Mikhail Bazarsadaev, 2021</p>
</footer>
