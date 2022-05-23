<?php

use \src\Models\Post;

$config = require ROOT . '/src/Config/config.php';

$postId = filter_input(INPUT_POST, 'postId');

Post::deleteById($postId);

header("Location: /journalpage.php");
