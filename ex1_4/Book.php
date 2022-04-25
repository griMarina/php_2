<?php

include_once "Item.php";

class Book extends Item
{
    public function __construct($id, $title, $price, $author)
    {
        parent::__construct($id, $title, $price);
        $this->author = $author;
    }

    public function getInfo()
    {
        return parent::getInfo() . ". Автор книги " . $this->author . ".";
    }
}

//$book1 = new Book(2, '"Король Лир"', 70, "Уильям Шекспир");
//echo $book1->getInfo();