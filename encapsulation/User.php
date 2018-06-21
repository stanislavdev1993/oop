<?php

namespace encapsulation;

class User
{
    private $_balance;

    public function setBalance(float $balance)
    {
        $this->_balance = $balance;
    }

    public function getBalance()
    {
        return $this->_balance;
    }
}