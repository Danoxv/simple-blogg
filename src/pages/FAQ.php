<?php
$_start = microtime(true);

require_once ROOT . '/src/Config/config.php';


use \src\Models\Post;
use \src\Models\User;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$posts = Post::fetchAll(
    ['id', 'title', 'content', 'author_id'],
    [
        'columns' => ['name'],
        'table' => ['u' => new User()],
        'on' => ['u.id', '=', 'author_id'],
    ]
);

$authors = User::fetchAll(['id', 'name']);

//if (isset($_SESSION['LogUser'])) {
//    echo 'Вы вошли под  логином' . ' ' . $_SESSION['LogUser'][0]['name'];
//} else {
//    echo 'Вы вошли как Гость';
//}


echo '<table border="1">';
echo '<head>';
echo '<meta charset="utf-8">';
echo '</head>';
echo '<form method="post" action="create-post.php">';
echo "<td><input type='text' name='title' placeholder= 'введите заголовок' ></td>";
echo "<td><input type='text' name='content' placeholder= 'введите Контент' ></td>";

echo "<td>";
echo $_SESSION['LogUser'][0]['name'];
echo "</td>";

echo '<td>' . '<button type="submit">Добавить</button>' . '</td>';
echo '</form>';
echo '</table>';

echo '<br>';

echo '<table border="1">';
echo '<tr>
<th>Заголовок</th>
<th>Контент</th>
<th>Имя автора</th>
<th>Обновить</th>
<th>Удалить</th>
<th>Детали</th>
</tr>';

foreach ($posts as $post) {
    echo '<tr>';

    if (isCanEditPost($_SESSION['LogUser'] ?? [], $post)) {
        printEditablePost($post, $authors);
    } else {
        printReadOnlyPost($post, $authors);
    }

    echo '<form method="get" action="post-details.php">';
    echo "<input type='hidden' name='postId' value='{$post['id']}'>";
    echo '<td><button type="submit">детали</button></td>';
    echo '</form>';
    echo '</tr>';

}

echo '</table>';

/**
 * Возвращает TRUE, если $authUser имеет право редактировать $post.
 *
 * @param array $authUser
 * @param array $post
 * @return bool
 */

function isCanEditPost($authUser, array $post): bool
{
    if (!empty($authUser)) {
        return $authUser[0]['id'] == $post['author_id'];
    }
    return false;
}

/**
 * Печатает редактируемую строку HTML таблицы, содержащуб пост.
 *
 * @param array $post Пост, который будет распечатан
 * @param array $authors
 */
function printEditablePost(array $post, array $authors)
{
    // Обновление
    echo '<form method="post" action="update-post.php">';
    echo "<td><input type='text' name='title' value='{$post['title']}'></td>";
    echo "<td><input type='text' name='content' value='{$post['content']}'></td>";

    echo "<td>";
    echo $_SESSION['LogUser'][0]['name'].'peq';

    echo "</td>";

    echo "<input type='hidden' name='postId' value='{$post['id']}'>";
    echo '<td>' . '<button type="submit">Обновить</button>' . '</td>';
    echo '</form>';

    // Удаление
    echo '<form method="post" action="delete-post.php">';
    echo "<input type='hidden' name='postId' value='{$post['id']}'>";
    echo '<td>' . '<button type="submit">Удалить</button>' . '</td>';
    echo '</form>';

}

/**
 * Печатает НЕредактируемую строку HTML таблицы, содержащуб пост.
 *
 * @param array $post Пост, который будет распечатан
 * @param array $authors
 */
function printReadOnlyPost(array $post, array $authors)
{
    echo "<td><span>{$post['title']}</span></td>";
    echo "<td><span>{$post['content']}</span></td>";

    foreach ($authors as $author) {
        if ($author['id'] === $post['author_id']) {
            echo "<td><span>{$author['name']}</span></td>";
        }
    }

    echo "<td colspan='3'></td>";
}

$_end = microtime(true) - $_start;
echo '<pre><b></b> Страница сгенерирована за ', $_end, '</pre>';
?>

