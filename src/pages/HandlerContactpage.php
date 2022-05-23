<?php

use \src\helpers\Functions;

$name = Functions::filterInputString(INPUT_POST, 'user_name');
$surnName = Functions::filterInputString(INPUT_POST, 'user_surname');
$messegeUser = Functions::filterInputString(INPUT_POST, 'user_msg');
$email = Functions::filterInputString(INPUT_POST, 'user_email');

$token = '2142126909:AAFgVik4FHBk-7vVXvrVsWq58hgwb6I9ibU';
$chat_id = '-607735469';
$arr = array(
    'Имя пользователя: ' => $name,
    'Фамилия пользователя: ' => $surnName,
    'Email' => $email,
    'Предложение:' => $messegeUser,
);
$txt = '';
$errors = [];
foreach ($arr as $key => $value) {
    $txt .= "<b>" . $key . "</b> " . $value . "%0A";
}
if (empty($name) || empty($surnName) || empty($messegeUser) || empty($email)) {
    $errors[] = 'Заполните все поля';
}

if (!empty($errors)) {
    require_once ROOT . '/src/Views/Errorsview.php';
    die;
}

$sendToTelegram = file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
if($sendToTelegram) {
    header("Location: /");
}else{
    die('Откисай');
}

