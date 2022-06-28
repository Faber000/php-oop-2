<?php

class Product {
    public string $name;
    public float $price;
    public int $quantity;
    public string $animal_type;
    

    public function __construct(string $_name, float $_price, int $_quantity, string $_animal_type)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->quantity = $_quantity;
        $this->animal_type = $_animal_type;
    }
}