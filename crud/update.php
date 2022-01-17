<?php

$connection = mysqli_connect('localhost',
    'root', '',
    'scriptinglanguage');

if (!$connection) {
    echo "Database not connected";
    exit();
}

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id='$id'";
$response = mysqli_query($connection, $sql);
$studentData = mysqli_fetch_assoc($response);


if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $query = "UPDATE students SET name='$name', email='$email',address='$address' WHERE id='$id'";
    $response = mysqli_query($connection, $query);
    if ($response) {
        header('Location:index.php');
    } else {
        header('Location:index.php');
    }
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
    <h1>Update Record</h1>
    <hr>
    <form action="" method="post">
        <label for="name">Name</label> <br>
        <input type="text" name="name" value="<?= $studentData['name'] ?>" id="name"> <br>
        <label for="email">Email</label> <br>
        <input type="text" name="email" value="<?= $studentData['email'] ?>" id="email"> <br>
        <label for="address">Address</label> <br>
        <input type="text" name="address" value="<?= $studentData['address'] ?>" id="address"> <br> <br>
        <button>Update record</button>
    </form>

</blockquote>

</body>
</html>