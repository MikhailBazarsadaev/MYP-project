<!DOCTYPE html>
<head>
    <meta charset="en">
    <link rel="stylesheet" href="CSS/atomic-structure.css">
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
  <div style='margin-left: 25px;'>
    <h2>Строение атома. Развитие атомических учений.</h2>
    <p>Сегодня предстоит узнать что такое атом, молекула и химический элемент. Для этого взглянем на историю развития атомических теорий</p>
  </div>
  <div class="timeline" style="font-size: 20px;">
    <div class="container left">
      <div class="content">
        <h2>Античность</h2>
        <div class='doctrines'>
          <div class='aristotel' style='border-right: 6px solid #0f2345; padding-right: 25px;'>
            <h3>Учение Аристотеля</h3>
            <img src='img/aristotel-scheme.png'>
            <p class="aristotel">Тела можно делить до бесконечности, все состоит из воды, воздуха, огня и земли.</p>
          </div>
          <div class='aristotel'>
            <h3>Учение Демокрита</h3>
            <ul style='line-height: 150%;'>
              <li>Бытие есть нечто простое, понимая под ним неделимое – атом </li>
              <li>Дает материалистическую трактовку этому понятию, мысля атом как наименьшую, далее не делимую физическую частицу.</li>
              <li>Атомы Демокрита различаются по форме и величине + двигаясь в пустоте они соединяются между собой в силу различия по форме </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container right">
      <div class="content">
        <h2>Средневековье</h2>
        <p>Атомические теории почти забыты и вытеснены учением Аристотеля</p>
      </div>
    </div>
    <div class="container left">
      <div class="content">
        <h2>Возрождение</h2>
        <p>Атомические теории возрождаются: появились корпускулярные(корпускула - мельчайшая частица) теории Ломоносова, Бойля и др.</p>
        <p>Например, вот корпускулярное учение Бойля:</p>
        <ul>
          <li>все тела состоят из мельчайших частиц (корпускул), эти частицы столь малы, что их невозможно увидеть</li>
          <li>Первичные частицы отличаются друг от друга формой, размерами и характером своего движения </li>
          <li>Первичные частицы способны объединяться в более или менее прочные совокупности - кластеры, по терминологии Бойля;</li>
          <li>Кластеры являются основными структурными единицами тел.</li>
          <li>Элементы - практически неразложимые тела (вещества), состоящие из сходных однородных корпускул</li>
        </ul>
        <div>
          <p>Подведем итог:</p>
          <ol>
            <li>Все тела состоят из атомов</li>
            <li>Молекула - мельчайшая частица вещества</li>
            <li>Атом - мельчайшая частица молуекулы</li>
            <li>Химический элемент - это определенный вид атомов</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div>
    <a class="button" href="atomic-structure-task.php">Перейти к заданиям</a>
  </div>
</body>
<footer>
  <p>This site is a prototype<br>Made by Mikhail Bazarsadaev, 2021</p>
</footer>