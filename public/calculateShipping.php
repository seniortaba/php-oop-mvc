<?php

class Product
{
    private $price;
    private $weight;
    private $freeShipping = false;

    public function __construct($price, $weight)
    {
        $this->weight = $weight;
        $this->price = $price;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setFreeShipping()
    {
        $this->freeShipping = true;
    }

    public function getFreeShipping()
    {
        return $this->freeShipping;
    }
}

class Shipping
{
    private $totalShipping;
    private $products;

    private $pricePerKilogram;

    public function __construct($pricePerKilogram)
    {
        $this->pricePerKilogram = $pricePerKilogram;
    }

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function calculateTotalShipping()
    {
        foreach($this->products as $product){
            if(!$product->getFreeShipping())
                $this->totalShipping = $product->getWeight() * $this->pricePerKilogram;
        }
    }

    public function getTotalShippingPrice()
    {
        return $this->totalShipping;
    }

}


$pricePerKilogram = 5;
$product = new Product(1,1);

$shipping = new Shipping($pricePerKilogram);
$shipping->addProduct($product);

$shipping->calculateTotalShipping();
$totalShippingPrice = $shipping->getTotalShippingPrice();
var_dump($totalShippingPrice);