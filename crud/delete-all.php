<?php

$connection = mysqli_connect('localhost',
    'root', '',
    'scriptinglanguage');

if (!$connection) {
    echo "Database not connected";
    exit();
}


$studentId = $_POST['studentId'];

$x = 0;

foreach ($studentId as $id) {
    $sql = "DELETE FROM students WHERE id='$id'";
    $res = mysqli_query($connection, $sql);
    $x++;
}

header('Location:index.php');