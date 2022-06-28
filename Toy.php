<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product {
    public $type;
    public $size; 

    public function __construct(string $_name, float $_price, int $_quantity, int $_animal_type)
    {
        parent::__construct($_name, $_price, $_quantity, $_animal_type);
        $this->type = $_type;
        $this->size = $_size;
    }
}