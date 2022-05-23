<?php

use \src\Models\User;

$config = require ROOT . '/src/Config/config.php';
if (!User::isGuest()) {
    User::deauthorize();
}
header("Location: {$config['sitePath']}");