<?php


class Database
{
    private $_conn;
    private static $_instance;

    public function __construct()
    {
        $this->Connection();
    }


    private function Connection()
    {
        $this->_conn = new PDO("mysql:host=localhost;dbname=scriptinglanguage", "root", "admin");
    }

    public static function Instance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new Database();
        }
        return self::$_instance;
    }


    public function Insert($table, $data)
    {
        $columns = implode(',', array_keys($data));
        $values = array_values($data);
        $setKey = '';
        $increment = 1;
        foreach ($data as $key => $val) {
            $setKey .= '?';
            if ($increment < count($data)) {
                $setKey .= ',';
            }
            $increment++;
        }
        $query = "INSERT INTO $table($columns) VALUES($setKey)";
        $prepareStatement = $this->_conn->prepare($query);
        try {
            if ($prepareStatement->execute($values)) {
                return $this->_conn->lastInsertId();
            }

        } catch (PDOException $exception) {
            die($exception->getMessage());
        }

    }

    public function Update($tableName, $data, $criteria, $bindData = [])
    {
        $mergeValue = array_merge(array_values($data), $bindData);
        $setColumns = '';
        $increment = 1;
        foreach ($data as $key => $value) {
            $setColumns .= "{$key}=?";
            if ($increment < count($data)) {
                $setColumns .= ", ";
            }
            $increment++;
        }
        $query = "UPDATE {$tableName} SET {$setColumns} WHERE $criteria=?";
        $prepareStatement = $this->_conn->prepare($query);
        try {
            return $prepareStatement->execute($mergeValue);

        } catch (PDOException $exception) {
            die($exception->getMessage());
        }

    }

    public function Delete($tableName, $criteria, $bindValue = [])
    {
        $query = "DELETE FROM {$tableName} WHERE  $criteria=?";
        $prepareStatement = $this->_conn->prepare($query);
        try {
            return $prepareStatement->execute($bindValue);

        } catch (PDOException $exception) {
            die($exception->getMessage());
        }


    }


    function Query($query)
    {

        $prepareStatement = $this->_conn->prepare($query);
        try {
            $prepareStatement->execute([]);
            return $prepareStatement->fetchAll(PDO::FETCH_CLASS);

        } catch (PDOException $exception) {
            die($exception->getMessage());
        }

    }

    public function Select($tableName, $columns = "*", $orderBy = "", $limitOffsetQuery = "")
    {
        if (empty($columns)) {
            $columns .= "*";
        }
        $query = "SELECT $columns FROM $tableName";

        if (!empty($orderBy)) {
            $query .= " ORDER BY $orderBy $limitOffsetQuery";
        }

        $prepareStatement = $this->_conn->prepare($query);
        try {
            $prepareStatement->execute([]);
            return $prepareStatement->fetchAll(PDO::FETCH_CLASS);

        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }

    public function getBy($tableName, $columns = "*", $criteria = "", $bindValue = [])
    {
        if (empty($columns)) {
            $columns .= "*";
        }
        $query = "SELECT $columns FROM $tableName WHERE $criteria=?";

        $prepareStatement = $this->_conn->prepare($query);
        try {
            $prepareStatement->execute($bindValue);
            $response = $prepareStatement->fetchAll(PDO::FETCH_CLASS);
            return $response[0];

        } catch (PDOException $exception) {
            die($exception->getMessage());
        }

    }
}



