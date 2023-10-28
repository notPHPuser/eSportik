<?php


require_once __DIR__ . '/../helpers.php';

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
{
  
  addValidationError('email', 'Неверный формат электронной почты');
  setMessage('error', 'Ошибка валидации');
  redirect('/../log.php');
}
 
$user = findUser($email);


if (!$user) {
  setMessage('error', "Пользователь $email не найден");
  redirect('/../log.php');
}


if (!password_verify($password, $user['password']))
{
  setMessage('error', "Неверный пароль");
  redirect('/../log.php');
}


$_SESSION['user']['id'] = $user['id'];

redirect('/../../index.php');