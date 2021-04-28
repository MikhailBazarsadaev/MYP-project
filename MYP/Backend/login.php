<?php
session_id();
session_start();

$data = $_POST;

if (empty($data['username']) || empty($data['password'])) {
	$_SESSION['messages'][] = $data['password'];
    header('Location: signin.php');
}
$username = $data['username'];
$psw = $data['password'];
$dsn = 'mysql:dbname=letovo_myp;host=localhost';
$dbUser = 'root';
$dbPassword = '1234';
try {
	$connection = new PDO($dsn, $dbUser, $dbPassword);
} catch (PDOException $e) {
	die('Connection failed, try again'. $e->getMessage());
}

$statement = $connection->prepare('SELECT * FROM users WHERE username = :username');
$statement->execute([':username' => $username]);
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
if (empty($result)) {
	$_SESSION['messages'][] = 'No user with such username';
    header('Location: signin.php');
}
$user = array_shift($result);
if ($user['username'] === $username  && $user['password'] === $psw) {
	$statement = $connection->prepare('SELECT id FROM users WHERE username = :username');
	$statement->execute([':username' => $username]);
	$result = $statement->fetchAll();
	//$result = print_r($result, true);
	$_SESSION['messages'][] = $result[0]['id'];
	$_SESSION['id'][0] = $result[0]['id'];
	header('Location: signin.php');
}
?>