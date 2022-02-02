<?php


//class Mobile
//{
//    public $name = 'test';
//
//    public function __construct($data)
//    {
////        print_r($data);
//
//    }
//
//    public function brand()
//    {
//        echo "i am parent method";
//    }
//
//}
//
//trait OnlineClass
//{
//    public function __construct()
//    {
//
//    }
//
//    public $y = 20;
//
//    public function test()
//    {
//        echo "test method";
//    }
//}
//
//trait MorningClass
//{
//    public $y = 30;
//
//}
//
////$obj = new MorningClass();
//
//class Mi extends Mobile
//{
//    use MorningClass, OnlineClass;
//
//    public function __construct(...$data)
//    {
////        parent::__construct($data);
//        Mobile::__construct($data);
//    }
//
//    public function brand()
//    {
//        echo "i am child method";
//        echo "<br>";
//        parent::brand();
//    }
//
//
//}
//
//$obj = new Mi('a', 'b', 'c');


//$obj->y;
//$obj->brand();
//$obj->test();

//$obj->name;


class Mobile
{
    public function run()
    {
//        static::test();
//        echo static::$x;

        echo $this->x;

        static::test();

    }


}

class Mi extends Mobile
{
    public $x = 10;

    public static function test()
    {
        echo "I am from child method";
    }
}

$obj = new Mi();

$obj->run();

//Mi::run();
//$obj->

//Mobile::run();

//$ojb = new Mobile();
//$ojb->run();

//Mobile::run();
