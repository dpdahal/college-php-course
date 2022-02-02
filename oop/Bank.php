<?php


class Bank
{

    public function bank_name()
    {
        echo "test";
    }

    private function password()
    {
        echo md5('admin');
    }

    protected function amount()
    {
        return 20000;
    }

}

class  User extends Bank
{
    public function getAmount()
    {
        echo $this->amount();
    }

}

$obj = new User();
$obj->getAmount();

//$obj->amount();

//$obj = new Bank();
//$obj->password();
//$obj->bank_name();

