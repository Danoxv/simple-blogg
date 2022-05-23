<?php

use src\Helpers\Functions;
use src\Models\User;

$old_psw = Functions::filterInputString(INPUT_POST, 'old-psw');
$new_psw = Functions::filterInputString(INPUT_POST, 'new-psw');
$rep_new_psw = Functions::filterInputString(INPUT_POST, 'rep-new-psw');
$errors = [];
$array_old_psw = User::fetchWhere(['password'], ['id' => $_SESSION['LogUser'][0]['id']]);
if (empty($old_psw) || empty($new_psw) || empty($rep_new_psw)) {
    $errors [] = 'Заполните все поля';
}
if ($array_old_psw[0]['password'] == $new_psw) {
    $errors[] = 'Не повторяйте пароль c бывшим';
}
if ($new_psw != $rep_new_psw) {
    $errors[] = 'Пароли не совпадают';
}
if (!empty($errors)) {
    require_once ROOT . '/src/Views/Errorsview.php';
    die;
}
$new_psw = password_hash($new_psw,PASSWORD_DEFAULT);
User::update(['password'=>$new_psw],['id'=>$_SESSION['LogUser'][0]['id'],'name'=>$_SESSION['LogUser'][0]['name']]);
unset($_SESSION['LogUser']);
require_once ROOT.'/src/Views/HandlerChangeHtml.php';
