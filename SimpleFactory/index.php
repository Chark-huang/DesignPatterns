<?php
namespace DesignPatterns\SimpleFactory;
include "../vendor/autoload.php";
class Client
{
    public function good()
    {
        $factory = new Factory();
        $operation = $factory->create('+');
        $operation->setNumberA(1);
        $operation->setNumberB(2);
        $result = $operation->getResult();
        echo $result;
    }
}
$client = new Client();
$client->good();