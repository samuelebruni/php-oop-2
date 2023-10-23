<?php
require_once __DIR__ . '/../Traits/AddPeso.php';
class Food extends Product
{   
    use AddPeso;
    public $section = 'food';
    public $category;
    public $weight;


    public function __construct($productCategory, $name, $price, $code, $img, $productWeight)
    {
        $this->category = $productCategory;
        parent::__construct($name, $price, $code, $img);
        $this->weight = $productWeight;
    }


    //FUNZIONE CHE VERRA ESEGUITA TRAMITE TRAITS
    /*public function getPeso()
    {
        return $this->weight;
    }*/
}