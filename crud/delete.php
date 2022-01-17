<?php

$connection = mysqli_connect('localhost',
    'root', '',
    'scriptinglanguage');

if (!$connection) {
    echo "Database not connected";
    exit();
}

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id='$id'";
$res = mysqli_query($connection, $sql);
header('Location:index.php');