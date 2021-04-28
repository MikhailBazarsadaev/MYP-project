<!DOCTYPE html>
<head>
    <meta charset="en">
    <link rel="stylesheet" href="CSS/my-profile.css">
    <title>Main page</title>
</head>
<header>
    <h1 class = "title">
      <a href="index.php"><img src="img/chemtestlogo.png" class="logot"></a>Летово 
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
        <a href="grade_7.html">7 класс</a>
        <a href="#">8 класс</a>
        <a href="#">9 класс</a>
      </div>
    </div>
    <?php 
    session_start();
    if (array_key_exists('id', $_SESSION) == FALSE): ?> <a href="registerform.php" style="float: right;">Регистрация</a><?php endif; ?> 
  </div>
    <h2>Мой профиль</h2>
    <div class='db-info'>
      <label>Имя пользователя:</label>
      <p>
        <?php 
        //session_start();
        $dsn = 'mysql:dbname=letovo_myp;host=localhost';
        $dbUser = 'root';
        $dbPassword = '1234';
        try {
          $connection = new PDO($dsn, $dbUser, $dbPassword);
        } catch (PDOException $e) {
          die('Connection failed, try again'. $e->getMessage());
        }
        $statement = $connection->prepare('SELECT username FROM users WHERE id = :id');
        $statement->execute([':id' => $_SESSION['id'][0]]);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        $ans = implode($result[0]);
        echo $ans;
        ?>
      </p>
    </div>
    <div class='db-info'>
      <label>Почта:</label>
      <p>
        <?php 
        $statement = $connection->prepare('SELECT email FROM users WHERE id = :id');
        $statement->execute([':id' => $_SESSION['id'][0]]);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        $ans = implode($result[0]);
        echo $ans;
        ?>
      </p>
    </div>
    <div class='db-info'>
      <label>ID:</label>
      <p>
        <?php 
        echo $_SESSION['id'][0];
        ?>
      </p>
    </div>
    <form action='logout.php' method="POST">
      <button class="registerbtn">Выйти из аккаунта</button>
    </form>
</body>
<footer>
    <p>This site is a prototype<br>Made by Mikhail Bazarsadaev, 2021</p>
</footer>
