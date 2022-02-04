<?php
require_once "Database.php";

$obj = Database::Instance();

if (!empty($_GET['criteria'])) {
    $id = $_GET['criteria'];
    $obj->Delete('students', 'id', [$id]);
    header('Location:index.php');
}