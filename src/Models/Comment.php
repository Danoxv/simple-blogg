<?php
namespace src\Models;
use \src\Models\BaseModel;

/**
 * Description of Comment
 */
class Comment extends BaseModel
{
    protected static ?string $tableName = 'comments';

    public static function fetchComments(int $postId)
    {
        return parent::fetchWhere(['post_id', 'author_id', 'content'], ['post_id' => $postId]);
    }

    public static function deleteByPostId(int $postId)
    {
        return parent::deleteByColumn('post_id', $postId);
    }
}
