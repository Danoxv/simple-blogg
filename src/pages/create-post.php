<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
use \src\Models\Post;
use \src\Models\User;

/** @var PDO $dbConnection */
$dbConnection = require ROOT . '/src/Config/database-connection.php';
$config = require ROOT . '/src/Config/config.php';
$errors = [];
$newTitle = filter_input(INPUT_POST, 'title');
$newContent = filter_input(INPUT_POST, 'content');
if (empty($newTitle) || empty($newContent) || empty(User::getAuthId())) {
    $errors[] = ' title and content are required ;press the back button or you are not logged in ';
}
if (!empty($errors)) {
    require_once ROOT . '/src/Views/Errorsview.php';
    die;
}
Post::create(['title' => $newTitle, 'content' => $newContent, 'author_id' => User::getAuthId()]);

header("Location: /journalpage.php");
