<?php

require_once __DIR__ . '/User.php';

class RegisteredUser extends User {
    public int $discount = 20;

    public function __construct(string $_name, string $_surname, string $_email)
    {
        parent::__construct($_name, $_surname, $_email);
    }
}