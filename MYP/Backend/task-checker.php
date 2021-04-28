<?php


session_start(); 

$data = $_POST;
if (empty($_SESSION['id'][0])) {
    echo 'Data is empty';
}
echo $_SESSION['id'][0];
print_r($data);
$select = 0;
$text = 0;
$checkbox = 0;

if ($data['select1'] == 1) {
    $select = 1;
} 
if ($data['text'] == 123) {
    $text = 1;
}
if (array_key_exists('checkbox1', $data) && count($data) == 3) {
    $checkbox = 1;
}
echo $select;
echo $text;
echo $checkbox;

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
$temp = $statement1->fetchAll();
print_r($temp);
echo "\r\n";
if (empty($temp)) {
    $statement = $connection->prepare('INSERT INTO atomicstructure (id, task1, task2,task3) VALUES (:id, :task1, :task2, :task3)');
    if ($statement) {	
        $result = $statement->execute([
            ':id' => $_SESSION['id'][0],
            ':task1' => $select,
            ':task2' => $text,
            ':task3' => $checkbox,
        ]);
        if ($result) {
            $_SESSION['messages'][] = 'Thank you for submiting answer!';
            header('Location: atomic-structure-task.php');
        exit;
        }
    }
} else {
    if ($select == 1) {
        $statement = $connection->prepare('UPDATE atomicstructure SET task1=1 WHERE id=?');
        if ($statement) {	
            $result = $statement->execute([$_SESSION['id'][0]]);
            if ($result) {
                $_SESSION['messages'][] = 'Thank you for submiting answer!';
                header('Location: atomic-structure-task.php');
            }
        }
    }
    if ($text == 1) {
        $statement = $connection->prepare('UPDATE atomicstructure SET task2=1 WHERE id=?');
        if ($statement) {	
            $result = $statement->execute([$_SESSION['id'][0]]);
            if ($result) {
                $_SESSION['messages'][] = 'Thank you for submiting answer!';
                header('Location: atomic-structure-task.php');
            }
        }
    }
    $_SESSION['messages'][] = $checkbox;
    if ($checkbox == 1) {
        $statement = $connection->prepare('UPDATE atomicstructure SET task3=1 WHERE id=?');
        if ($statement) {	
            $result = $statement->execute([$_SESSION['id'][0]]);
            if ($result) {
                $_SESSION['messages'][] = 'Thank you for submiting answer!';
                header('Location: atomic-structure-task.php');
            }
        }
    }
    header('Location: atomic-structure-task.php');
}
?>