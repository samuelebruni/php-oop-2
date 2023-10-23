<?php
class Kennel extends Product
{
    public $section = 'kennel';
    public $category;
    public $width;
    public $height;
    public $weight;


    public function __construct($productCategory, $name, $price, $code, $img, $productWidth, $productHeight, $productWeight)
    {
        $this->category = $productCategory;
        parent::__construct($name, $price, $code, $img);
        $this->width = $productWidth;
        $this->height = $productHeight;
        $this->weight = $productWeight;
    }

    public function getMisure()
    {
        return 'Misure: ' . $this->width . 'cm x ' . $this->height . 'cm';
    }

    public function getPeso()
    {
        return $this->weight;
    }
}