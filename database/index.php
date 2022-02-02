<?php
require_once "Database.php";

$obj = Database::Instance();

if (!empty($_POST)) {
    $obj->Insert('users', $_POST);
}


?>


<form action="" method="post">
    <input type="text" name="name">
    <input type="text" name="address">
    <button>Add record</button>
</form>
