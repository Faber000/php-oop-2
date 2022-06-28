<?php

class CreditCard {
    public $number;
    public $expire_date;
    public $brand;
    public $name;
    public $surname;
    public $cvc;
    
    /**
     * __construct
     *
     * @param  int $_number
     * @param  string $_expire_date
     * @param  string $_brand
     * @param  string $_name
     * @param  string $_surname
     * @param  int $_cvc
     * @return void
     */

    public function __construct(int $_number, string $_expire_date, string $_brand, string $_name, string $_surname, int $cvc)
    {
        $this->number = $_number;
        $this->expire_date = $_expire_date;
        $this->brand = $_brand;
        $this->name = $_name;
        $this->surname = $_surname;
        $this->cvc = $_cvc;
    }
}