<?php


require_once __DIR__. '/../helpers.php';

$login = $_POST['login'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$podPass = $_POST['podPass'] ?? null;

$_SESSION['validation'] = [];



if (empty($login)) {
  
  addValidationError('login', 'Неверный логин');
}

if (!filter_var($email,  FILTER_VALIDATE_EMAIL)) {
  
  addValidationError('email', 'Указана неправильная почта');
}

if (empty($password)) {
  addValidationError('password', 'Пароль пустой');
}

if ($password !== $podPass) {
  addValidationError('password', 'Пароли не совпадают');
}

if (!empty($_SESSION['validation'])) {

  redirect('/register.php');
}


$pdo = getPDO();

$query = "INSERT INTO userss (login, email, password) VALUES (:login, :email, :password)";

$params = [
  'login' => $login,
  'email' => $email,
  'password' => password_hash($password, PASSWORD_DEFAULT)
];

$stmt = $pdo->prepare($query);

try {
  $stmt->execute($params);
} catch (\Exception $e) {
  die($e->getMessage());
}


redirect('/log.php');