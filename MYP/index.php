<!DOCTYPE html>
<head>
    <meta charset="en">
    <link rel="stylesheet" href="CSS/test.css">
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
  <div class='main'>
    <p style='font-size: 28px; text-align: center; display: block; margin-left: auto; margin-right: auto;'>Это сайт - продукт моего MYP проекта.</p>
    <p class='featureshead'>Его оссобенности:</p> 
    <div class='features'>
      <div class='feature'>
        <p class='topic'>Обучение</p>
        <img src='img/study-icon.png' class='icon'>
        <p class='topic'>Цель сайта - обучить пользователя химии средней школы</p>
      </div>
      <div class='feature'>
        <p class='topic'>Интерактивность</p>
        <img src='img/interaction-icon3.png' class='icon'>
        <p class='topic'>На сайте присутствуют задания для закрепления материала</p>
      </div>
      <div class='feature'>
        <p class='topic'>Регистрация</p>
        <img src='img/registration-icon.png' class='icon'>
        <p class='topic'>Возможность регистрации</p>
      </div>
    </div>
    <p class='featureshead' style='margin-top: 75px;'>Сайт находится в разработке</p>
    <div class='indev'>
      <div class='indev-seq'>
        <p class='attention'>Функционал сайта</p>
        <div class='comparison'>
          <div class='created'>
            <p class='indev-head'>Доступно</p>
            <ul>
              <li>Главная</li>
              <li>Регистрация</li>
              <li>Выбор класса</li>
              <li>Мой профиль</li>
              <li>Материал 7 класса</li>
            </ul>
          </div>
          <div>
            <p class='indev-head'>В разработке</p>
            <ul>
              <li>Материал 8 класса</li>
              <li>Материал 9 класса</li>
              <li>Контакты</li>
            </ul>
          </div>
        </div>
      </div>
      <div class='indev-decor'>
        <img src='img/indev-icon2.png' class='indev-icon'>
        <p class='attention'>IN DEV</p>
      </div>
    </div>
  </div>
</body>
<footer>
    <p>This site is a prototype<br>Made by Mikhail Bazarsadaev, 2021</p>
</footer>
