<?php

include_once "Item.php";

class Toy extends Item
{
    protected $age;

    public function __construct($id, $title, $price, $age)
    {
        parent::__construct($id, $title, $price);
        $this->age = $age;
    }

    public function getAge() 
    {
        return $this->age;
    }

    public function getInfo()
    {
        return parent::getInfo() . ". Подходит для детей в возрасте от " . $this->getAge . "лет";
    }
}

//$toy1 = new Toy(3, "Машинка", 20, 3);
//echo $toy1->getInfo();