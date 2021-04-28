<!DOCTYPE html>
<head>
    <meta charset="en">
    <link rel="stylesheet" href="CSS/mole-and-mass-fraction.css">
    <title>Main page</title>
</head>
<header>
    <h1 class = "title">
      <a href="index.php"><img src="img/chemtestlogo.png" class="logot"></a>Летово 
      <?php 
      session_start();
      if (array_key_exists('id', $_SESSION) == TRUE): ?> <a class="my-profile" href="my-profile.php">Мой профиль</a><?php endif; ?>
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
  <div style="margin-left: 25px;">
    <h2>Понятия моли и массовой доли вещетва. Вывод формулы по массовым долям</h2>
  </div>
  <div>
    <a class="button" href="atomic-structure-task.php">Перейти к заданиям</a>
  </div>
</body>
<footer>
  <p>This site is a prototype<br>Made by Mikhail Bazarsadaev, 2021</p>
</footer>