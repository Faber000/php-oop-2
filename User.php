<?php

require_once __DIR__ . '/Credit_Card.php'; 

class User {
    public $name;
    public $surname;
    public $email;
    public $discount = 0;
    public $credit_card;

    
    /**
     * __construct
     *
     * @param  string $_name
     * @param  string $_surname
     * @param  string $_email
     * @return void
     */

    public function __construct(string $_name, string $_surname, string $_email)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }
}