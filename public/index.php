<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
session_start();
require_once '../vendor/autoload.php';

use \src\Helpers\Functions;

define('ROOT', dirname(__FILE__, 2));


$_requestUri = Functions::filterInputString(INPUT_SERVER, 'REQUEST_URI'); //Functions
$_requestUri = Functions::uriWithoutGetPart($_requestUri);
$_routes = require ROOT . '/src/Config/routes.php';
if (isset($_routes[$_requestUri])) {
    require_once ROOT . '/src/' . $_routes[$_requestUri];
} else {
    die('Error 404');
}
