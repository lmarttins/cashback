<?php

namespace Cashback\Domains\Account\Models;

class Account
{
    private $balance;
    private $bank;
    private $agency;
    private $checkingAccount;

    public function __construct($balance, $bank, $agency, $checkingAccount)
    {
        $this->balance = $balance;
        $this->bank = $bank;
        $this->agency = $agency;
        $this->checkingAccount = $checkingAccount;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function getBank()
    {
        return $this->bank;
    }

    public function getAgency()
    {
        return $this->agency;
    }

    public function getCheckingAccount()
    {
        return $this->checkingAccount;
    }
}
