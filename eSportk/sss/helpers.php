<?php

session_start();


require_once __DIR__ . '/config.php';

function redirect(string $path)
{
    header("Location: $path");
    die();
}
function addValidationError(string $fieldName, string $message)
{
  $_SESSION['validation'][$fieldName] = $message;
}

function validationErrorAttr(string $fieldName)
{
    echo isset($_SESSION['validation'][$fieldName]) ? 'aria-invalid="true"' : '';
}
function hasValidationError(string $fieldName): bool
{
    return isset($_SESSION['validation'][$fieldName]);
}
function validationErrorMessage(string $fieldName)
{
  echo $_SESSION['validation'][$fieldName] ?? '';
}



function claerValidation()
{
$_SESSION['validation'] = [];
}

function addOldValue(string $key, mixed $value): void
{
  $_SESSION['old'][$key] = $value;
}

function old(string $key)
{
  return $_SESSION['old'][$key] ?? '';
}


function clearoldValues(string $key): void
{
   $_SESSION['old'] = [];
}

function getPDO(): PDO
{
  try {
  return new \PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
  } catch (\PDOException $e){
    die($e->getMessage());
  }
}



function setMessage(string $key, string $message): void
{
  $_SESSION['message'][$key] = $message;
}


function getMessage(string $key): string
{
  $message = $_SESSION['message'][$key] ?? '';
  unset($_SESSION['message'][$key]);
  return $message;
}



function hasMessage(string $key): bool
{
  return isset($_SESSION['message'][$key]);
}



function findUser(string $email)
{
    $pdo = getPDO();

    $stmt = $pdo->prepare("SELECT * FROM userss WHERE email = :email");
    $stmt->execute(['email' => $email]);
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}





function currentUser()
{
    $pdo = getPDO();

    if (!isset($_SESSION['user'])) {
        return false;
    }

    $userId = $_SESSION['user']['id'] ?? null;

    $stmt = $pdo->prepare("SELECT * FROM userss WHERE id = :id");
    $stmt->execute(['id' => $userId]);
    return $stmt->fetch(\PDO::FETCH_ASSOC);
}



function logout(): void
{
    unset($_SESSION['user']['id']);

}


