<?php


abstract class College
{
    public $x = 20;

    abstract public function start($time);

    abstract protected function end();

    private function get()
    {
        return "i am get method";
    }

    public function test()
    {
        return $this->get();
    }

}

abstract class Teacher
{

    abstract function test();
}


class  Student extends College
{

    public function start($tm)
    {
        echo $this->x;
        // TODO: Implement start() method.
    }

    public function end()
    {
        // TODO: Implement end() method.
    }


}

$obj = new Student();
$obj->start(1);
$obj->test();