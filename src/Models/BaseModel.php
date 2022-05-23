<?php


namespace src\Models;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

use \src\helpers\Functions;

abstract class BaseModel
{
    protected static ?string $tableName;
    protected static string $idColumnName = 'id';
    private static ?\PDO $dbConnection = null;

    /**
     * @param array $columns
     * @param array $join
     */

    public static function fetchAll(array $columns, array $join = [])
    {
        self::setDbConnection();

        $tableName = static::$tableName;

        $select = 'SELECT ';

        foreach ($columns as $column) {
            $select .= "`$tableName`.`$column`, ";
        }

        if (!empty($join['columns'])) {
            $joinTableAlias = array_key_first($join['table']);

            foreach ($join['columns'] as $column) {
                $select .= "`$joinTableAlias`.`$column`, ";
            }

            $select = rtrim($select);
            $select = rtrim($select, ',');
        }

        $select = rtrim($select);
        $select = rtrim($select, ',');

        $sql = "$select FROM `$tableName` ";

        if (!empty($join)) {
            $joinTableAlias = array_key_first($join['table']);
            $object = $join['table'][$joinTableAlias];
            $joinTableName = $object::getTableName();

            $sql .= " JOIN $joinTableName AS $joinTableAlias";

            [$onLeft, $onCondition, $onRight] = $join['on'];

            if (str_contains($onLeft, '.')) {
                $onPartForAddingAlias = &$onRight;
            } else {
                $onPartForAddingAlias = &$onLeft;
            }

            $onPartForAddingAlias = "$tableName.$onPartForAddingAlias";

            $sql .= " ON $onLeft $onCondition $onRight ";
        }

        return self::$dbConnection->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function fetchWhere(array $columns, array $where)
    {
        self::setDbConnection();

        $tableName = static::$tableName;

        $select = 'SELECT ';

        foreach ($columns as $column) {
            $select .= "`$column`, ";
        }
        $select = rtrim($select);
        $select = rtrim($select, ',');
        $select .= " FROM `$tableName` WHERE BINARY";

        foreach ($where as $key => $value) {
            $select .= " $key = ? AND";
        }

        $select = Functions::beforeLast($select, 'AND');
        $prepare = static::$dbConnection->prepare($select);
        $prepare->execute(array_values($where));
        return $prepare->fetchAll();
    }

    /**
     *
     * @param array $columns
     * @param string $id
     * @return array|null
     */
    public static function fetchOne(array $columns, string $id): ?array
    {
        return self::fetchWhere($columns, ['id' => $id])[0] ?? null;

    }

    public static function create(array $values)
    {
        self::setDbConnection();
        $pdo_prp = '';
        $sql = 'INSERT INTO ';
        $sql .= static::$tableName . "(";
        foreach ($values as $key => $value) {
            $sql .= " `$key`,";
        }

        $sql = rtrim($sql);
        $sql = rtrim($sql, ",");

        $questions = str_repeat('?, ', count($values));
        $questions = rtrim($questions);
        $questions = rtrim($questions, ",");

        $sql .= ") VALUES ( $questions )";

        $pdo_prp = static::$dbConnection->prepare($sql);
        return $pdo_prp->execute(array_values($values));
    }

    /**
     * @param array $columns
     * @param array $where
     * @return bool
     */
    public
    static function update(array $columns, array $where): bool
    {
        self::setDbConnection();
        $tableName = static::$tableName;

        $sql = "UPDATE `$tableName` SET";

        foreach ($columns as $key => $column) {
            $sql .= " `$key` = ?, ";
        }
        $sql = rtrim($sql);
        $sql = rtrim($sql, ',');
        $sql .= ' WHERE ';

        $sq = array_keys($where);

        $sql .= implode('= ? and ', $sq) . '= ?';
        $pdo_prp = static::$dbConnection->prepare($sql);
        return $pdo_prp->execute(array_values(array_merge($columns, $where)));
    }

    public
    static function deleteById(int $id)
    {
        return self::deleteByColumn(static::$idColumnName, $id);
    }


    private
    static function setDbConnection(): void
    {
        if (self::$dbConnection !== null) {
            return;
        }

        self::$dbConnection = require ROOT . '/src/Config/database-connection.php';
    }

    /**
     * @return string|null
     */
    public
    static function getTableName(): ?string
    {
        return static::$tableName;
    }

    /**
     * @return PDO|null
     */
    protected
    static function getDbConnection(): ?\PDO
    {
        return self::$dbConnection;
    }

    /**
     * @param string $columnName
     * @param mixed $value
     * @return bool
     */
    public
    static function deleteByColumn(string $columnName, $value): bool
    {
        self::setDbConnection();
        $tableName = static::$tableName;

        $sql = " DELETE FROM`$tableName` WHERE `$tableName`.`$columnName` = ?";
        return static::$dbConnection->prepare($sql)->execute([$value]);
    }

}



