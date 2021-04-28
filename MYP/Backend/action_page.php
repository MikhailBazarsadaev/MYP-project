<?php

session_start();

$data = $_POST;

if (empty($data['username']) ||
    empty($data['password']) ||
    empty($data['email']) ||
    empty($data['password_confirm'])) {
    $_SESSION['messages'][] = 'Please fill all required fields!';
	header('Location: registerform.php');
    exit;
}

if ($data['password'] !== $data['password_confirm']) {
   $_SESSION['messages'][] = 'Password and Confirm password should match!';
   header('Location: registerform.php');
   exit; 
}

$dsn = "mysql:dbname=letovo_myp;host=localhost";
$dbUser = 'root';
$dbPassword = '1234';

try {
    $connection = new PDO($dsn, $dbUser, $dbPassword);
} catch (PDOExeption $exeption) {
    $_SESSION['messages'][] = 'Connection failed, try again' . $exeption->getMessage();
    header('Location: registerform.php');
    exit;
}

$statement = $connection->prepare('SELECT * FROM users WHERE username = :username OR email = :email');
if ($statement) {
  $statement->execute([
    ':username' => $data['username'],
    ':email' => $data['email'],
  ]);
  $result = $statement->fetchAll(PDO::FETCH_ASSOC);
  if (!empty($result)) {
    $_SESSION['messages'][] = 'The username or email was already taken';
    header('Location: registerform.php');
    exit;
  }
}
 
$statement = $connection->prepare('INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');
if ($statement) {	
	$result = $statement->execute([
		':username' => $data['username'],
		':email' => $data['email'],
		':password' => $data['password'],
	]);
	if ($result) {
		$statement = $connection->prepare('SELECT * FROM users WHERE username = :username');
    $statement->execute([':username' => $data['username']]);
    $result = $statement->fetchAll();
    $_SESSION['messages'][] = $result[0]['id'];
    $_SESSION['id'][0] = $result[0]['id'];
		header('Location: registerform.php');
    exit;
	}
}
?>
