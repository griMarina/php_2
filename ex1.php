<?php

abstract class Product
{
    const PROFIT_PERCENT = 20;
    protected $id;
    protected $title;
    protected $price;
    
    public function __construct(int $id, string $title, float $price)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
    }

    public function getId() 
    {
        return $this->id;
    }

    public function getTitle() 
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getInfo()
    {
        return "Название товара: " . $this->getTitle() . "<br>Общая стоимость: ". $this->getTotalPrice() . "$<br> Доход с продаж: " . $this->getProfit() . "$<hr>";
    }
  
    abstract function getTotalPrice();

    public function getProfit()
    {
        return $this->getTotalPrice() * self::PROFIT_PERCENT / 100;
    }
}


class DigitalProduct extends Product
{
    public function __construct($id, $title, $price) 
    {
        parent::__construct($id, $title, $price);
    }

    public function getTotalPrice()
    {
        return $this->getPrice();
    }

}


class PhysicalProduct extends Product
{
    protected $quantity;

    public function __construct($id, $title, $price, int $quantity) 
    {
        parent::__construct($id, $title, $price);
        $this->quantity = $quantity;
    }

    public function getQuantity() 
    {
        return $this->quantity;
    }

    public function getTotalPrice()
    {
        return $this->getPrice() * $this->getQuantity();
    }


    public function getInfo()
    {
        return "Количество: " . $this->getQuantity() . " шт<br>" . parent::getInfo();
    }
}

class WeightProduct extends Product
{
    protected $amount;

    public function __construct($id, $title, $price, float $amount) 
    {
        parent::__construct($id, $title, $price);
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    function getTotalPrice()
    {
        return $this->getPrice() * $this->getAmount();
    }

    public function getInfo()
    {
        return "Количество: " . $this->getAmount() . " кг<br>" . parent::getInfo();
    }
}

$product1 = new DigitalProduct(1, "Песня", 3);
echo $product1->getInfo();

$product2 = new PhysicalProduct(2, "Книга", 25, 3);
echo $product2->getInfo();

$product3 = new WeightProduct(3, "Мука", 4, 5);
echo $product3->getInfo();