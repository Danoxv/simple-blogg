<?php

/** @var \PDO $dbConnection */
$dbConnection = require ROOT. '/src/Config/database-connection.php';
$config = require ROOT . '/src/Config/Config.php';

use \src\Models\Post;

$postId = filter_input(INPUT_POST, 'postId');
$newTitle = filter_input(INPUT_POST, 'title');
$newContent = filter_input(INPUT_POST, 'content');
$errors = [];

$post = $dbConnection->query("SELECT author_id FROM `posts` WHERE id = $postId")->fetchAll(PDO::FETCH_ASSOC);
$post = $post[0];

if ($_SESSION['LogUser'][0]['id'] !== $post['author_id']) {
    $errors[] = 'Вы не тот пользователь который оставил пост';
}
if (!empty($errors)) {
    require_once ROOT . '/src/Views/Errorsview.php';
    die;
}
Post::update(['title' => $newTitle, 'content' => $newContent, 'author_id' => $_SESSION['LogUser'][0]['id']], ['`posts`.`id`' => $postId]);
header("Location: /journalpage.php");




