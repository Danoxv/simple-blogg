<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
use \src\Models\User;
use \src\helpers\Functions;

$config = require ROOT . '/src/Config/config.php';

$name = Functions::filterInputString(INPUT_POST, 'name');
$psw = Functions::filterInputString(INPUT_POST, 'psw');
$user = User::fetchWhere(['id', 'name', 'password'], ['name' => $name]);
$errors = [];
//var_dump($user);
if (!$user) {
    $errors[] = 'Такого нет';
} elseif(!password_verify($psw, $user[0]['password'])) {
    $errors[] = 'неверый пароль';
}


if (!empty($errors)) {
    require_once ROOT . '/src/Views/Errorsview.php';
    die;
}

$_SESSION['LogUser'] = $user;

header("Location: {$config['sitePath']}");
