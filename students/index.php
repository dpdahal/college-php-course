<?php
require_once "Database.php";

$obj = Database::Instance();

$studentData = $obj->Select('students');

if (!empty($_POST)) {
    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['address'] = $_POST['address'];
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
<blockquote>
    <h1>Student Record</h1>
    <hr>
    <form action="" method="post">
        <label for="name">Name</label> <br>
        <input type="text" name="name" id="name"> <br>
        <label for="email">Email</label> <br>
        <input type="text" name="email" id="email"><br>
        <label for="address">Address</label> <br>
        <input type="text" name="address" id="address"><br><br>
        <button>Add record</button>
    </form>
    <hr>
    <table width="100%" border="1">
        <thead>
        <tr>
            <td>S.n</td>
            <td>Name</td>
            <td>Email</td>
            <td>Address</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($studentData as $key => $student) : ?>
            <tr>
                <td><?= ++$key; ?></td>
                <td><?= $student->name ?></td>
                <td><?= $student->email ?></td>
                <td><?= $student->address ?></td>
                <td>
                    <a href="edit.php?criteria=<?= $student->id ?>">Edit</a>
                    <a href="delete.php?criteria=<?= $student->id ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</blockquote>

</body>
</html>