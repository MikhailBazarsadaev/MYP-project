<!DOCTYPE html>
<head>
    <meta charset="en">
    <link rel="stylesheet" href="CSS/atomic-structure-task-style.css">
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
    <h2>Задания</h2>
    <?php require_once "messages.php"; ?>
    <form action="task-checker.php" method="POST">
      <div class="question" id='q1'>
        <h3>№1</h3>
        <p>Кто создатель первой атомической теории?</p>
        <p>Выберите вариант ответа: 
          <select name="select1" id="select1">
            <option id="option1" value=1>Аристотель</option>
            <option id="option2" value=2>Демокрит</option>
          </select>
        </p>
      </div>
      <div class="question" id='q2'>
        <h3>№2</h3>
        <p>Сколько шагов в научном исследовании?</p>
        <label>Ответ: </label>
        <input type="text" placeholder="Enter answer" id="text" name="text" required>
      </div>
      <div class="question" id='q3'>
        <h3>№3</h3>
        <p>Как можно найти моли?</p>
        <p>Ответ: </p>
        <input type="checkbox" name="checkbox1" id="checkbox1">
        <label for="vehicle">По массе</label></br>
        <input type="checkbox" name="checkbox2" id="checkbox2">
        <label for="vehicle">По форме</label>
      </div>
      <button type="submit" class="registerbtn">Submit answers</button>
    </form>
    <?php 
    //session_start();

    $dsn = "mysql:dbname=letovo_myp;host=localhost";
    $dbUser = 'root';
    $dbPassword = '1234';

    try {
        $connection = new PDO($dsn, $dbUser, $dbPassword);
    } catch (PDOExeption $exeption) {
        $_SESSION['messages'][] = 'Connection failed, try again' . $exeption->getMessage();
        header('Location: atomic-structure-task.php');
        exit;
    }
    $statement1 = $connection->prepare('SELECT * FROM atomicstructure WHERE id = :id');
    $statement1->execute([':id' => $_SESSION['id'][0]]);
    if ($statement1 == TRUE) {
      $result = $statement1->fetchAll();
      if (!empty($result)){
        print_r($result);
        if ($result[0]['task1'] == 1) {
          echo '123456';
          ?>
          <style>
            #q1 {
              background-color: lightgreen;
            }
          </style>
          <?php 
        } else {
          ?>
          <style>
            #q1 {
              background-color: #F08080;
            }
          </style>
          <?php 
        }
        if ($result[0]['task2'] == 1) {
          echo '4567';
          ?>
          <style>
            #q2 {
              background-color: lightgreen;
            }
          </style>
          <?php 
        } else {
          ?>
          <style>
            #q2 {
              background-color: #F08080;
            }
          </style>
          <?php 
        }
        if ($result[0]['task3'] == 1) {
          echo '4567';
          ?>
          <style>
            #q3 {
              background-color: lightgreen;
            }
          </style>
          <?php 
        } else {
          ?>
          <style>
            #q3 {
              background-color: #F08080;
            }
          </style>
          <?php 
        }
      }
    }
    ?>
</body>
<footer>
    <p>This site is a prototype<br>Made by Mikhail Bazarsadaev, 2021</p>
</footer>
