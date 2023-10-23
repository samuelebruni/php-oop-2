<?php
class Toy extends Product
{
    public $section = 'toy';
    public $category;
    public $materials;

    public function __construct($productCategory, $name, $price, $code, $img, $productMaterials)
    {
        $this->category = $productCategory;
        parent::__construct($name, $price, $code, $img);
        $this->materials = $productMaterials;
    }

    public function getMateriale()
    {
        return $this->materials;
    }
}