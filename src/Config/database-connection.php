<?php

$dbName = 'danoxv';
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = 'root';

return new PDO("mysql:dbname=$dbName;host=$dbHost", $dbUser, $dbPassword);  