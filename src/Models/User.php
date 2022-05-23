<?php

namespace src\Models;

use \src\Models\BaseModel;

/**
 * Description of  class User
 */
class User extends BaseModel
{
    protected static ?string $tableName = 'users';

    /**
     * @return bool
     * @return true когда юзер не вошел
     * false когда юзер вошел
     */
    public static function isGuest()
    {
        return empty($_SESSION['LogUser']);

    }

    /**
     * @return void
     */
    public static function deauthorize()
    {
        unset($_SESSION['LogUser']);
    }

    public static function getAuthId()
    {
        if (!self::isGuest()) {
            return $_SESSION['LogUser'][0]['id'];
        }

        return null;
    }
}

