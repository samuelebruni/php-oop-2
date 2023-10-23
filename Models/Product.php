<?php

class Product
{
    public $name;
    public $price;
    public $code;
    public $img;

    public function __construct($productName, $productPrice, $productCode, $productImg)
    {
        $this->name = $productName;
        $this->price = $productPrice;
        $this->code = $productCode;
        $this->img = $productImg;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getImg()
    {
        return $this->img;
    }
}