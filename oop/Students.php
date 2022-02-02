<?php


class Students
{
    public function __construct($name, $age)
    {
        
    }

    public static $x = 20;

    public static function test()
    {
        echo self::$x;

//        echo Students::$x;
//        echo $this->x;

//        echo "I am static method";
    }

}

//Students("y",10);
Students::test();
//Students::$x;

