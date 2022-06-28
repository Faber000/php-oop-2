<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {
    public string $type;
    public string $expire_date;
    

    public function __construct(string $_name, float $_price, int $_quantity, string $_animal_type, string $_type, string $_expire_date)
    {
        parent::__construct($_name, $_price, $_quantity, $_animal_type);
        $this->type = $_type;
        $this->expire_date = $_expire_date;
    }
}