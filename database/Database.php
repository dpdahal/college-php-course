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

    public function Update(){

    }

    public function Delete(){

    }

    public function Select(){

    }

    public function Count(){

    }

}

