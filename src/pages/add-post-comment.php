<?php

use \src\Models\Comment;

$config = require ROOT . '/src/Config/config.php';
if(empty($_SESSION['LogUser'])){
    echo 'Вы не вошли';
    die;
}
$postId = filter_input(INPUT_POST, 'postId');
$content = filter_input(INPUT_POST, 'text');
$errors = [];
if (empty($content)) $errors [] = 'введите коментарий';
if (!empty($errors)) {
    require_once ROOT . '/src/Views/Errorsview.php';
    die;
}

$comment = Comment::create(['post_id' => $postId, 'author_id' => $_SESSION['LogUser'][0]['id'], 'content' => $content]);

header("Location: /post-details.php?postId=$postId");


?>

