<?php
namespace src\Models;
use \src\Models\Comment;
use \src\Models\BaseModel;
/**
 * Description of Post
 */
class Post extends BaseModel
{
    protected static ?string $tableName = 'posts';

    public static function deleteById($id)
    {
        Comment::deleteByPostId($id);
        parent::deleteById($id);
    }
}
