<?php

require_once __DIR__ . '/CreditCard.php'; 

class User {
    public string $name;
    public string $surname;
    public string $email;
    public int $discount;
    public CreditCard $credit_card;


    public function __construct(string $_name, string $_surname, string $_email)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->discount = 0;
    }

    public function setCreditCard(CreditCard $credit_card): void
    {
        $this->credit_card = $credit_card;
    }

}