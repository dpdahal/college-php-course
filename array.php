<?php
//
//$data = [1, 2, 3, 4, 5, 6];
//
//for ($x = 0; $x < count($data); $x++) {
//    echo $data[$x];
//}


//$data = ['name' => 'abc', 'age' => 12];
//
//echo $data['name'];

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

//$_GET;
//$_POST;
//$_SERVER;
//$_SESSION;
//$_COOKIE;
//$_FILES;
//$_REQUEST;
//$_ENV;
//$GLOBALS;

//echo "<pre>";
//print_r($_SERVER);
//echo "</pre>";

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

if (!empty($_POST)) {
    $userName = $_POST['username'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO table_name(username,test,phone)
                VALUES('$userName','$address','$phone')";

    echo $query;

}

$users = [
    ['username' => 'admin', 'address' => 'ktm', 'phone' => 98768],
    ['username' => 'ram', 'address' => 'ltp', 'phone' => 987680],
    ['username' => 'sita', 'address' => 'bkt', 'phone' => 980768],
];


?>

<a href="demo-test.php?id=12">click</a>

<form action="" method="post">
    <input type="text" name="username">
    <input type="text" name="address">
    <input type="text" name="phone">
    <button>Add Record</button>
</form>

<hr>
<table width="100%" border="1">
    <thead>
    <tr>
        <th>S.n</th>
        <th>Username</th>
        <th>Address</th>
        <th>Phone</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $key => $user) { ?>
        <tr>
            <td><?= ++$key ?></td>
            <td><?= $user['username'] ?></td>
            <td><?= $user['address'] ?></td>
            <td><?= $user['phone'] ?></td>

        </tr>
    <?php } ?>
    </tbody>
</table>