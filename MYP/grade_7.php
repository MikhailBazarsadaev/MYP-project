<!DOCTYPE html>
<head>
    <meta charset="en">
    <link rel="stylesheet" href="CSS/grade_7.css">
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
  <h1>7 класс</h1>
  <div class="about">
    <h2 style="font-size: 30px;">О курсе</h2>
    <p>
      Вы находитесь на странице моего MYP проекта - курса по химии. Данный курс создан для школьников 7-9 класса. 
      В нем будут освещены основные темы 7 класса на разных уровнях с заданиями для закрепления материала.
      <br><strong>На данный момент эта часть сайта находится в "бета" версии.</strong>
    </p>
  </div>
  <h1 style="padding-left: 20px;">
    Программа курса:
  </h1>
  <main>
    <ul class="course-programm">
      <li class="module">
        <button class="collapsible" onClick="myFunction(this.id)" id='main-concepts'><h2>Введение и основные химические понятия<img src="img/expand-32.png" class="arrow" id="1"></h2></button>
        <div class="content">
          <ol>
            <li><a href="introduction.php">Введение в химию.</a></li>
            <li><a href="scientific-method.php">Научный метод познания. Цикл исследования</a></li>
            <li><a href="atomic-structure.php">Строение атома. Развитие атомических учений</a></li>
            <li><a href="mole-and-mass-fraction.php">Понятия моли и массовой доли вещетва. Вывод формулы по массовым долям</a></li>
          </ol>
        </div>
        <p>
          Из чего состоит мир? Что такое моль, массовая доля?
        </p>
      </li>
      <li class="module">
        <button class="collapsible" onClick="myFunction(this.id)" id='classes'><h2>Основные классы неорганических соединенний<img src="img/expand-32.png" class="arrow" id="2"></h2></button>
        <div class="content">
          <ol>
            <li><a href="#">Ссылка 1</a></li>
            <li><a href="#">Ссылка 1</a></li>
            <li><a href="#">Ссылка 1</a></li>
            <li><a href="#">Ссылка 1</a></li>
          </ol>
        </div>
        <p>
          Какие есть классы неорганических соединений? Какие у них свойства?
        </p>
      </li>
      <li class="module">
        <button class="collapsible" onClick="myFunction(this.id)" id='mixtures'><h2>Разделение смесей<img src="img/expand-32.png" class="arrow" id="3"></h2></button>
        <div class="content">
          <ol>
            <li><a href="#">Ссылка 1</a></li>
            <li><a href="#">Ссылка 1</a></li>
            <li><a href="#">Ссылка 1</a></li>
            <li><a href="#">Ссылка 1</a></li>
          </ol>
        </div>
        <p>
          Какие есть типы смесей? Как их разделять?
        </p>
      </li>
      <li class="module">
        <button class="collapsible" onClick="myFunction(this.id)" id='sumup'><h2>Обобщение материала курса<img src="img/expand-32.png" class="arrow" id="4"></h2></button>
        <div class="content">
          <ol>
            <li><a href="#">Ссылка 1</a></li>
            <li><a href="#">Ссылка 1</a></li>
            <li><a href="#">Ссылка 1</a></li>
            <li><a href="#">Ссылка 1</a></li>
          </ol>
        </div>
        <p>
          Что мы прошли? Как это применяется?
        </p>
      </li>
    </ul>
  </main>
  <script src="JS/expand.js"></script>
  <script type="text/javascript">
  function myFunction(clicked_id) {
    if (clicked_id == 'main-concepts') {
      clicked_id = '1';
    }
    if (clicked_id == 'classes') {
      clicked_id = '2';
    }
    if (clicked_id == 'mixtures') {
      clicked_id = '3';
    }
    if (clicked_id == 'sumup') {
      clicked_id = '4';
    }
    var arrow = document.getElementById(clicked_id);
    if (arrow.classList.contains('rotate')) {
      arrow.classList.remove('rotate');
    } else {
      arrow.classList.add('rotate');
    }
  }
  </script>
</body>
<footer>
    <p>This site is a prototype<br>Made by Mikhail Bazarsadaev, 2021</p>
</footer>
