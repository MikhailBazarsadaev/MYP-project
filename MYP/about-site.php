<!DOCTYPE html>
<head>
    <meta charset="en">
    <link rel="stylesheet" href="CSS/about-site.css">
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
    <a href="#">О сайте</a>
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
  <div style='margin-left: 25px;'>
      <h2>О сайте и его структуре</h2>
      <div>
        <h3>Инструменты/Языки программирования:</h3>
        <div class='tools'>
          <div>
            <p style='padding-bottom: 25px;'>"Front-end" cайта был реализован с помощью голого HTML + CSS, есть небольшие анимации с помощью JavaScript'a.</p>
            <p>"Back-end" cайта состоит из PHP и MySQL, работал с базами данных в phpMyAdmin</p>
          </div>
          <div>
            <img src='img/html-css-icon2.png' class='html-icon'>
            <img src='img/xampp-icon.png' class='xampp-icon'>
          </div>
        </div>
      </div>
      <div>
        <h3>Изображения:</h3>
        <p>Все изображения на данном сайте бесплатные и взяты из гугл картинок/др. сайтов с ссылками на них.</p>
        <p><img src='img/expand-32.png' style='margin-right:20px;'>Эта картинка взята с <a href='icons8'>этого сайта</a>. Другие картинки идут по открытым лицензиям и не требуют ссылку на страницу.</p>
      </div>
  </div>