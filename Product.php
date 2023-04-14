<?php

class Product
{
    public $name;
    public $price;

    public function showSalesPrice()
    {
        $this->price *= 0.09;
        //prijs met twee decimalen
        return number_format($this->price, 2);
    }

}

$game = new Product();
$game->name = "fifa";
$game->price = 40;

echo $game->showSalesPrice();




