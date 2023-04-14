<?php

class Product
{
    public $name;
    public $category;
    public $price;

    public $description;


    public function __construct($name, $price, $description)
    {
        $this->name = strtolower($name);
        $this->price = $price;
        $this->description = $description;
    }


    public function setCategory($category)
    {
        $this->category = strtoupper($category);
    }

    public function showSalesPrice()
    {
        $this->price *= 0.09;
        //prijs met twee decimalen
        return number_format($this->price, 2);
    }

}

$game = new Product("fifa", 20, "dit is een beschrijving");
$game->setCategory("playstation");
echo $game->name . "<br>";
echo $game->category . "<br>";
echo $game->price . "<br>";
echo $game->description . "<br>";





