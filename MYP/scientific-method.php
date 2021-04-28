<!DOCTYPE html>
<head>
    <meta charset="en">
    <link rel="stylesheet" href="CSS/scientific-method.css">
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
    <h2>Научный метод познания. Цикл исследования</h2>
    <p>Я думаю легче всего начать изучать химию с основного способа познания окружающего мира - Научного метода.</p>
  </div>
  <div class="explanation">
    <a href="https://www.presence.io/blog/how-to-improve-student-engagement-with-science/" ><img src="img/Scientific-Method.png" class="scheme"></a>
    <span class='steps'>
      <h3 style="font-weight: normal;">Научный метод можно разбить на несколько основных шагов:</h3>
      <ol style='line-height: 200%;'>
        <li>Найти <b>исследовательский вопрос</b>, который ты хочешь изучать.</li>
        <li>Провести небольшое теоретическое исследование/<b>обоснование</b> этого вопроса</li>
        <li>Составить <b>гипотезу</b>, основываясь на результатах 2 пункта</li>
        <li>Провести <b>эксперимент</b>, который мог бы подтвердить или опровергнуть гипотезу</li>
        <li><b>Проанализировать данные</b> эксперимента</li>
        <li><b>Прорефлексировать</b> и сделать вывод о верности гипотезы</li>
      </ol>
      <p style="font-size: 20px;">
        Вот эти шаги - <strong>основа любого научного исследования</strong>. Они пригодятся тебе в будущем в твоих начинаниях в любых науках.
      </p>
      <p style="font-size: 20px; line-height: 150%;">
        Часто их дополняют зависимой, независимой переменными и контролируемыми параметрами.<br>
        Неависимая переменная - то, что экспериментатор <b>изменяет</b>;<br>
        Зависимая - то, что экспериментатор <b>измеряет</b>;<br>
        Контролируемые параметры - параметры, которые остаются <b>неизменными</b> на протяжении всего эксперимента
      </p>
    </span>
  </div>
  <p style='font-size: 20px; margin-left: 10%; padding-left: 25px;'>Для лучшего понимания, я приведу пример ниже.</p>
  <div class="example">
    <span>
      <p style="line-height: 150%;">
        Допустим, тебе интересно <strong>как зависит количество растворенного сахара в воде от температуры</strong>(исследовательский вопрос).<br>
        Из повседневной жизни ты наверняка пил чай с сахаром, зачастую он горячий(или хотя бы теплый).<br>
        Поэтому, я бы составил гипотезу о том, что <strong>в горячей воде сахар растворяется лучше</strong>(гипотеза).
      </p>
      <p style="line-height: 150%;">
        В данном случае, температура - независимая переменная(то, что мы изменяем),<br> а количество растворенного сахара - зависимая(то, что мы изменяем).<br>
        Независимых параметров очень много, например, давление атмосферы.
      </p> 
      <p>После проведения эксперимента, ты наверняка получишь схожий график. По графику видно, что наша гипотеза подтвердилась.</p>
    </span>
  </div>
  <div>
    <a class="button" href="atomic-structure-task.php">Перейти к заданиям</a>
  </div>
</body>
<footer>
  <p>This site is a prototype<br>Made by Mikhail Bazarsadaev, 2021</p>
</footer>