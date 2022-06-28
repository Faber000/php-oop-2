<?php

class CreditCard {
    public string $number;
    public string $expire_date;
    public string $brand;
    public string $name;
    public string $surname;
    public string $cvc;
    

    public function __construct(string $_number, string $_expire_date, string $_brand, string $_name, string $_surname, string $_cvc)
    {
        $this->number = $_number;
        $this->expire_date = $_expire_date;
        $this->brand = $_brand;
        $this->name = $_name;
        $this->surname = $_surname;
        $this->cvc = $_cvc;
    }
}