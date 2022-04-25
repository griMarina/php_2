<?php

include_once "Item.php";

class Toy extends Item
{
    public function __construct($id, $title, $price, $age)
    {
        parent::__construct($id, $title, $price);
        $this->age = $age;
    }

    public function getInfo()
    {
        return parent::getInfo() . ". Подходит для детей в возрасте от " . $this->age . "лет";
    }
}

//$toy1 = new Toy(3, "Машинка", 20, 3);
//echo $toy1->getInfo();