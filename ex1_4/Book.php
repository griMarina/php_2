<?php

include_once "Item.php";

class Book extends Item
{
    protected $author;

    public function __construct($id, $title, $price, $author)
    {
        parent::__construct($id, $title, $price);
        $this->author = $author;
    }

    public function getAuthor() 
    {
        return $this->author;
    }

    public function getInfo()
    {
        return parent::getInfo() . ". Автор книги " . $this->getAuthor() . ".";
    }
}

//$book1 = new Book(2, '"Король Лир"', 70, "Уильям Шекспир");
//echo $book1->getInfo();