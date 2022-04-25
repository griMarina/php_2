<?php

class Item {
    protected $id;
    protected $title;
    protected $price;
    
    public function __construct($id, $title, $price)
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
        return "Товар " . $this->getTitle() . ", стоимость ". $this->getPrice() . "$";
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}
//$item1 = new Item(1, "Куртка", 2000);
//echo $item1->getInfo();