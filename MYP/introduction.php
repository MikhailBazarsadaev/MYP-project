<!DOCTYPE html>
<head>
    <meta charset="en">
    <link rel="stylesheet" href="CSS/introduction.css">
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
  <div style="margin-left: 25px; font-size: 21px; line-height: 150%;">
    <h2>Введение в химию.</h2>
    <div class='physical-items'>
      <div>
        <p>
          Вокруг нас находится множество физических тел - кровать, стол, очки и так далее. Эти тела обычно делят по составу, то есть на физические вещества, например: футболка состоит на 100% из хлопка.<br> <strong>То, из чего состоят физические тела - вещества</strong>.<br>
        </p>
        <p>
          У всех веществ имеются общеизвестные различные свойства: плотность, цвет и т.д. Это все физические свойства.<br>
          Но так же у тел можно найти и химические свойства. Для того чтобы понять, чем же они являются, обратимся к определению химии:
        </p>
          <p style='font-size: 22px; margin-bottom: 50px;'>Химия - наука о веществах и их превращениях в другие</p>
        <p>
          Значит, можно предположить, что <strong>химические свойства - это способность одних веществ превращаться в другие</strong>.
        </p>
      </div>
      <div class='items'>
          <img src='img/tshirt1.png' class='tshirt-icon'>
          <img src='img/table.png' class='tshirt-icon'>
          <p style='text-align: center;'>Физические тела</p>
      </div>
    </div>
    <div>
      <p>
        В этом курсе я состредоточусь на 2 разделах химии - общей и неорганической химии.<br>
      </p>
      <p style='line-height: 150%'>
        Общая химия изучает самые основные законы химии, которые важны и для других разделов химии. Например, они помогают определить свойства веществ<br>
        Неорганическая химия изучает строение, реакционную способность неорганических веществ и элементов. Неорганические вещества - вещества, которые не содержат углерод, либо же достаточно простые для изучения.
      </p>
    </div>
  </div>
  <div>
    <a class="button" href="atomic-structure-task.php">Перейти к заданиям</a>
  </div>
</body>
<footer>
  <p>This site is a prototype<br>Made by Mikhail Bazarsadaev, 2021</p>
</footer>