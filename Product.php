<?php

class Product
{
    public $name;
    public $category;
    public $price;

    public function setName($name){
        $this->name = strtolower($name) ;
    }

    public function setCategory($category) {
        $this->category = strtoupper($category);
    }

    public function showSalesPrice()
    {
        $this->price *= 0.09;
        //prijs met twee decimalen
        return number_format($this->price, 2);
    }

}

$game = new Product();
//$game->name = "fifa";
//$game->price = 40;

$game->setName("test") ;
$game->setCategory("playstation") ;
echo $game -> name . "<br>";
echo $game -> category . "<br>";





