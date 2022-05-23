<?php

use League\CommonMark\GithubFlavoredMarkdownConverter;

$data = json_decode(file_get_contents("php://input"));
//$markdownToConvert = $_POST['markdown'];

$converter = new GithubFlavoredMarkdownConverter([
    'html_input' => 'strip',
    'allow_unsafe_links' => false,
]);
echo $converter->convert($data->lastname);