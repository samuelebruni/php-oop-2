<?php
require_once __DIR__ . '/../Traits/AddPeso.php';
class Kennel extends Product
{   
    use AddPeso;
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


    /*FUNZIONE CHE VERRA ESEGUITA TRAMITE TRAITS
    public function getPeso()
    {
        return $this->weight;
    }*/
}