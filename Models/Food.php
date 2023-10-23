<?php
class Food extends Product
{
    public $section = 'food';
    public $category;
    public $weight;


    public function __construct($productCategory, $name, $price, $code, $img, $productWeight)
    {
        $this->category = $productCategory;
        parent::__construct($name, $price, $code, $img);
        $this->weight = $productWeight;
    }

    public function getPeso()
    {
        return $this->weight;
    }
}