<?php

abstract class DB1
{

    abstract function connection();

    abstract function insert($tableName, $data);

    abstract function update($tableName, $data, $criteria);

    abstract function delete($tableName, $criteria);

    abstract function select($tableName, $columns, $criteria, $limit);
}


class DB extends Database1
{

    function connection()
    {
        mysqli_connect();
        // TODO: Implement connection() method.
    }

    function insert($tableName, $data)
    {
        // TODO: Implement insert() method.
    }

    function update($tableName, $data, $criteria)
    {
        // TODO: Implement update() method.
    }

    function delete($tableName, $criteria)
    {
        // TODO: Implement delete() method.
    }

    function select($tableName, $columns, $criteria, $limit)
    {
        $sql="SELECT $columns FROM $tableName";
    }
}

//  name,email from students
//student
// users