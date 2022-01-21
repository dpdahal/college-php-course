<?php

//state: account number,balance
//behaviour: deposit, withdraw
// oop: 5.0 version
//Scope: public, protected, private
//class Introduction
//{
////    var $x = 10;
//    public $x = 10;
//
//    public function test()
//    {
////        $obj = new Introduction();
////        echo $obj->x;
//        return "The number is: {$this->x}";
//    }
//
//    public function add($x, $y=0)
//    {
//        return $x + $y;
//    }
//}
//
//
//$object = new Introduction();
//
//// -> object operator
////:: static method : $x
////echo $object->x;
//$object->x = 30;
//echo $object->test();
//echo "<br>";
//echo $object->add(10, 20);

// PDO: laravel,java orm,django,javascript,dot.net;
// DB:


class  Introduction
{
    public $full_name;

    public function __construct($name, $age)
    {
        echo "I am construct";
//        $this->full_name = $name;
    }

    public function getName()
    {
        echo $this->full_name;
    }

    public function __destruct()
    {
        echo "I am destruct";
    }
}

$obj = new Introduction('hari', 20);
$obj->getName();