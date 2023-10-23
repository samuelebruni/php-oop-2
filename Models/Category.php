<?php
class Category
{
    public $pet;

    public function __construct($petSelect)
    {
        $this->pet = $petSelect;
    }

    public function getPet()
    {
        return $this->pet;
    }
}