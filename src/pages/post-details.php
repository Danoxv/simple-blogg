<?php

use League\CommonMark\GithubFlavoredMarkdownConverter;
use \src\Models\Comment;
use \src\Models\Post;
use \src\Models\User;

$errors = [];
$postId = filter_input(INPUT_GET, 'postId');

if (empty($postId)) {
    $errors[] = 'нет  id поста';
}
if (!empty($errors)) {
    require_once ROOT . '/src/Views/Errorsview.php';
    die;
}
$post = Post::fetchOne(['title', 'content', 'author_id', 'created_at'],$postId);
require_once ROOT . '/src/Views/post-detailsHtml.php';

$comments = Comment::fetchComments($postId);
$converter = new GithubFlavoredMarkdownConverter([
    'html_input' => 'strip',
    'allow_unsafe_links' => false,
]);
foreach ($comments as $key => $value) {

    echo $converter->convert($value['content']) . '<br />';
}

?>

