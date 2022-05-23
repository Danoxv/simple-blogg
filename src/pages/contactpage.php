<?php
use \src\helpers\Functions;
$email = Functions::filterInputString(INPUT_POST, 'user_email');
setcookie('Email',$email);
require_once ROOT . '/src/Views/contactView.php';
