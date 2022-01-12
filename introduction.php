<?php

//echo "<h1>Hello php</h1>";

//print("hello")

//$name = "sophia";
//$_1=10;
//echo '"'.$name.'"';
//echo "'$name'";
//====================
//'sophia';
//echo 'hello '.$name;
//echo "hello $name";
//=,-,
//$x = 10;
//
//echo gettype($x);
//
//$userName = 'admin';
//$password = 'admin002';
//if($userName=="admin" || $userName == "ram" && $password=="admin002" || $password == "ram002") {
//    echo("Welcome " . $userName);
//}else{
////    echo("Welcome ".$userName);
//    echo ("<br> Your username or password is incorrect");
//}
//if(($userName == "ram" && $password == "ram002") || ($userName == "admin" && $password == "admin002")){
//    echo "welcome $userName";
//}
//else{
//    echo  "Invalid username and password";
//}


//$x = 100;
//$y = 20;
//$z = 300;
//
//if ($x > $y && $x > $z) {
//    echo "x is greatest";
//} elseif ($y > $x && $y > $z) {
//    echo "Y is greatest";
//
//} else {
//    echo "z is greatest";
//}


//if ($x>$y){
//    if($x>$z){
//        echo "X is greatest";
//    }
//    else{
//        echo "Z is greatest";
//    }
//}
//else{
//    if($y>$z){
//        echo "Y is greatest";
//    }
//    else{
//        echo "z is greatest";
//    }
//}

//$age = 45;
//
//if($age >0 && $age<=18 )
//{
//    echo "Under 18";
//
//}
//elseif($age>18 && $age<40)
//{
//    echo "Welcome";
//
//}
//else{
//    echo "Old Patient";}

//$name = "admin";

//for,while,do while,foreach

$x=0;
$y=1;
$z =$x;

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .box {
            width: 200px;
            height: 200px;
            background: red;
            float: left;
            margin: 5px;
        }
    </style>
</head>
<body>
<?php for ($i = 1; $i <= 5; $i++) { ?>
    <div class="box"></div>
<?php } ?>

</body>
</html>
