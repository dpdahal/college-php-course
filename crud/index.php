<?php


$connection = mysqli_connect('localhost',
    'root', '',
    'scriptinglanguage');

if (!$connection) {
    echo "Database not connected";
    exit();
}


if (!empty($_GET['q'])) {
    $criteria = $_GET['q'];
    $sql = "SELECT * FROM students WHERE 
            name LIKE '%$criteria%' || 
            email LIKE '%$criteria%' ||
            address LIKE '%$criteria%'
            ";

    $studentResponse = mysqli_query($connection, $sql);
    $totalStudents = mysqli_num_rows($studentResponse);
} else {
    $sql = "SELECT * FROM students";
    $studentResponse = mysqli_query($connection, $sql);
    $totalStudents = mysqli_num_rows($studentResponse);
}


if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];


    $query = "INSERT INTO students(name,email,address)VALUES('$name','$email','$address')";
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
    <h1>Student Record</h1>
    <hr>
    <form action="" method="post">
        <label for="name">Name</label> <br>
        <input type="text" name="name" id="name"> <br>
        <label for="email">Email</label> <br>
        <input type="text" name="email" id="email"> <br>
        <label for="address">Address</label> <br>
        <input type="text" name="address" id="address"> <br> <br>
        <select name="country" id="">
            <option value="nepal">Nepal</option>
            <option value="china">china</option>
            <option value="us">us</option>
        </select>
        <button>Add record</button>
    </form>
    <hr>

    <form action="">
        <input type="text" name="q" placeholder="enter any keyword">
        <button>Search</button>
    </form>
    <hr>
    <table width="100%" border="1">
        <form action="delete-all.php" method="post">
            <thead>
            <tr>
                <td></td>
                <td>S.n</td>
                <td>Name</td>
                <td>Email</td>
                <td>Address</td>
                <td>Action</td>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($studentResponse as $key => $student) : ?>
                <tr>
                    <td>
                        <input type="checkbox" name="studentId[]" value="<?= $student['id'] ?>">
                    </td>
                    <td><?= ++$key; ?></td>
                    <td><?= $student['name']; ?></td>
                    <td><?= $student['email']; ?></td>
                    <td><?= $student['address']; ?></td>
                    <td>
                        <a href="update.php?id=<?= $student['id'] ?>">Edit</a>
                        <a href="delete.php?id=<?= $student['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>


            </tbody>
            <?php if ($totalStudents > 0) : ?>
                <tfoot>
                <tr>
                    <td colspan="6">
                        <button>Delete All</button>
                    </td>
                </tr>
                </tfoot>
            <?php endif; ?>
        </form>

    </table>
</blockquote>

</body>
</html>