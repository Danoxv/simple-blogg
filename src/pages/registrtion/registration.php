<?php

use \src\Models\User;

use \src\helpers\Functions;

$name = Functions::filterInputString(INPUT_POST, 'Name');
$age = Functions::filterInputString(INPUT_POST, 'Age');
$psw = Functions::filterInputString(INPUT_POST, 'psw');
$psw_repeat = Functions::filterInputString(INPUT_POST, 'psw-repeat');
$regex = "/^[\wа-яА-Я]+$/";
$regex1 = "/^[0-9]+$/";
$errors = [];
if (empty($name) || empty($age) || empty($psw)) {
    $errors [] = 'Э лох де  данные?? Наебать меня вздумал 😡';
}
if (User::fetchWhere(['id'], ['name' => $name])) {

    $errors[] = 'Такой пользователь уже существет';
}
if (!preg_match($regex, $name) || !preg_match($regex1, $age) || !preg_match($regex, $psw)) {
    $errors[] = 'Неверный формат:ПОЛЕ МОЖЕТ СОДЕРЖАТЬ АНГЛИСКИЕ И РУССКИЕ БУКВЫ А ТАК ЖЕ НИЖНЕЕ ПОДЧЕРКИВАНИЕ ФОРМА ВОЗРАСТ ДОЛЖНА СОДЕРЖАТЬ ЦЕЛОЧИСЛЕННЫЕ ЗНАЧЕНИЯ';
}
if (strlen($age)>3||mb_strlen($name)>16||mb_strlen($psw) >16||mb_strlen($psw_repeat) >16) {
    $errors[]='введите меньше символов в пароле( max 16 символов),имя(max 16 символов)),возраст (max 3 символа)';
}
if(strlen($name)<4||strlen($age)<1||strlen($psw)<8||strlen($psw_repeat)<8){
    $errors[]='введите больше символов в пароле( min 8 символов),имя(min 4 символа)),возраст (min 1 символа)';
}
if ($psw !== $psw_repeat) {
    $errors[] = 'Убедитесь в соответствии паролей ';
}

if (!empty($errors)) {
    require_once ROOT . '/src/Views/Errorsview.php';
    die;
}
$hashedPass = password_hash($psw, PASSWORD_DEFAULT);
User::create(['name' => $name, 'age' => $age, 'password' => $hashedPass]);
require_once ROOT . '/src/Views/HandlerHtml.php';
