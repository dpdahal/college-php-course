<?php

require_once "Database.php";

$obj = Database::Instance();

if (!empty($_GET['criteria'])) {
    $id = $_GET['criteria'];
    $data = $obj->getBy('students', '', 'id', [$id]);
}

if (!empty($_POST)) {
    $obj->Update('students', $_POST, 'id', [$id]);
    header('Location:index.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<blockquote>

    <h1>Update record</h1>
    <form action="" method="post">
        <label for="name">Name</label> <br>
        <input type="text" value="<?= $data->name ?>" name="name" id="name"> <br>
        <label for="email">Email</label> <br>
        <input type="text" name="email" value="<?= $data->email ?>" id="email"><br>
        <label for="address">Address</label> <br>
        <input type="text" name="address" value="<?= $data->address ?>" id="address"><br><br>
        <button>Update record</button>
    </form>
</blockquote>

</body>
</html>
