<?php
require_once ROOT . '/src/Config/config.php';

use \src\Models\Post;
use \src\Models\User;

$posts = Post::fetchAll(
    ['id', 'title', 'content', 'author_id', 'created_at'],
    [
        'columns' => ['name'],
        'table' => ['u' => new User()],
        'on' => ['u.id', '=', 'author_id'],
    ]
);
//var_export($posts);die;
$posts = array_reverse($posts);

$authors = User::fetchAll(['id', 'name']);
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
 * @throws Exception
 */

function printEditablePost(array $post)
{
    $date = new DateTime($post['created_at']);
    echo ' <div class="col-lg-4 col-md-6 mb-4">';
    echo '<div class="post-entry-1 h-100">';

    echo '<img src="images/img_3.jpg" alt="Image" class="img-fluid">';
    echo '</a>';
    echo '<div class="post-entry-1-contents">';

    echo '<form method="post" action="/update-post.php">';
//    echo "<div class='container'>";
    echo "<div class='form-group row'>";
    echo "<div class='col-md-6 mb-4 mb-lg-0'>";
    echo "<h2><input type='text' class='form-control' name='title' value='{$post['title']}'></a></h2>";
    echo "<span class='meta d-inline-block mb-3'>{$date->format('M d,Y')}<span class='mx-2'>by</span> <a href='#'>{$post['name']}</a></span>";
    echo "<input type='hidden'  name='postId' value='{$post['id']}'>";
    echo "<p><input type='text' class='form-control' name='content' value='{$post['content']}'></p>";
    echo " </div>";
    echo " </div>";
    echo "<div class='d-flex justify-content-end mb-lg-1' style='position:absolute;width:300px;top:250px'>";
    echo "<input type='submit' value='&#9998;' class='btn btn-primary btn-md text-white'>";
//    echo "</div>";
    echo "</div>";


    echo '</form>';

    echo '<form method="get" action="/post-details.php">';
    echo "<input type='hidden' name='postId' value='{$post['id']}'>";
    echo "<div class='d-flex justify-content-end mb-lg-1' style='position:absolute;width:300px;top:300px;'>";
    echo "<input type='submit' value='&#128386;' class='btn btn-primary btn-md text-white'>";
    echo "</div>";
    echo '</form>';

    echo '<form method="post" action="/delete-post.php">';
    echo "<input type='hidden' name='postId' value='{$post['id']}'>";
    echo "<div class='d-flex justify-content-end mb-lg-1' style='position:absolute;width:300px;top:350px;'>";
    echo "<input type='submit' value='&#128465;' class='btn btn-primary btn-md text-white'>";
    echo "</div>";
    echo '</form>';


    echo ' </div>';
    echo '</div>';
    echo '</div>';

//    // Обновление важно !!
//    echo '<form method="post" action="update-post.php">';
//    echo "<td><input type='text' name='title' value='{$post['title']}'></td>";
//    echo "<td><input type='text' name='content' value='{$post['content']}'></td>";
//    echo "<input type='hidden' name='postId' value='{$post['id']}'>";
//    echo '<td>' . '<button type="submit">Обновить</button>' . '</td>';
//    echo '</form>';

    // Удаление важно !!
//    echo '<form method="post" action="delete-post.php">';
//    echo "<input type='hidden' name='postId' value='{$post['id']}'>";
//    echo '<td>' . '<button type="submit">Удалить</button>' . '</td>';
//    echo '</form>';

//    // Дублирование в качестве практики
//    echo '<form method="post" action="create-post.php">';
//    echo "<input type='hidden' name='title' value='{$post['title']}'>";
//    echo "<input type='hidden' name='content' value='{$post['content']}'>";
//    echo "<input type='hidden' name='authorId' value='{$post['author_id']}'>";
//    echo '<td>' . '<button type="submit">Дубликат</button>' . '</td>';
//    echo '</form>';


}

/**
 * Печатает НЕредактируемую строку HTML таблицы, содержащуб пост.
 *
 * @param array $post Пост, который будет распечатан
 * @param array $authors
 * @throws Exception
 */
function printReadOnlyPost(array $post)
{
    $date = new DateTime($post['created_at']);

    echo ' <div class="col-lg-4 col-md-6 mb-4">';
    echo '<div class="post-entry-1 h-100">';
    echo '<img src="images/img_3.jpg" alt="Image" class="img-fluid">';
    echo '</a>';
    echo '<div class="post-entry-1-contents">';

    echo " <h2>{$post['title']}</a></h2>";
    echo "<span class='meta d-inline-block mb-3'>{$date->format('M d,Y')}<span class='mx-2'>by</span><a href='#'>{$post['name']}</a></span>";
    echo "<p>{$post['content']}</p>";
    echo '<form method="get" action="post-details.php">';
    echo "<input type='hidden' name='postId' value='{$post['id']}'>";
    echo "<div class='d-flex justify-content-end mb-lg-1' style='position:absolute;width:300px;top:290px;'>";
    echo "<input type='submit' value='&#128386;' class='btn btn-primary btn-md text-white'>";
    echo "</div>";
    echo '</form>';
    echo ' </div>';
    echo '</div>';
    echo '</div>';


//    foreach ($authors as $author) { // authors
//        if ($author['id'] === $post['author_id']) {
//            echo "<td><span>{$author['name']}</span></td>";
//        }
//    }
}

require_once ROOT . '/src/Views/journalView.php';