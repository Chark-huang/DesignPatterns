<?php
namespace DesignPatterns\SimpleFactory;

class Factory
{

    public function create($operate)
    {
        switch ($operate) {
            case '+':
                $result = new Add();
                break;
            case '-':
                $result = new Sub();
                break;
            case '*':
                $result = new Mul();
                break;
            case '/':
                $result = new Div();
                break;
            default:
                throw new \InvalidArgumentException('暂不支持的运算');
        }
        return $result;
    }
}