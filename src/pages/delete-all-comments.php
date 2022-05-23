<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
use \src\Models\Comment;
$postId = filter_input(INPUT_POST, 'postId');

$errors = [];
if (empty($postId)) {
    $errors[] = 'нет  id поста хуй';
}
if (!empty($errors)) {
    require_once ROOT . '/src/Views/Errorsview.php';
    die;
}


Comment::deleteByPostId($postId);

header("Location: /post-details.php?postId=$postId");