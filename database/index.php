<?php
require_once "Database.php";

$obj = Database::Instance();

$studentData = $obj->Query('select * from students');

if (!empty($_POST)) {
    $data = $_POST;
    $obj->Insert('students', $data);
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

<form action="" method="post">
    <input type="text" name="name">
    <input type="text" name="email">
    <input type="text" name="address">
    <button>Add Record</button>
</form>
<hr>
<table width="100%" border="1">
    <thead>
    <tr>
        <th>S.n</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($studentData as $key=>$student) : ?>
        <tr>
            <td><?=++$key?></td>
            <td><?=$student->name;?></td>
            <td><?=$student->email;?></td>
            <td><?=$student->address;?></td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>


        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>