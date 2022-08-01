<?php

class Product
{
    private $weight;
    private $price;

    public function __construct($weight, $price)
    {
        $this->weight = $weight;
        $this->price = $price;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}

class Shipping
{
    private $totalShipping;
    private $products;
    private $pricePerKilogram;
    private $shippingProvider;

    public function __construct($pricePerKilogram)
    {
        $this->pricePerKilogram = $pricePerKilogram;
    }

    public function shippingCalculate($weight, $shippingPrice)
    {
        return $weight * $shippingPrice;
    }

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function totalProductsShipping()
    {
        foreach ($this->products as $product){
            $this->totalShipping += $product->getWeight() * $this->pricePerKilogram;
        }
    }

    public function getTotalShippingPrice()
    {
        return $this->totalShipping;
    }


}

$product = new Product(2,4);

$pricePerKilogram = 5;
$shipping = new Shipping($pricePerKilogram);
$shipping->addProduct($product);
$shipping->totalProductsShipping();

$price = $shipping->getTotalShippingPrice();
var_dump($price);
