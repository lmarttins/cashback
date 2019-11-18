<?php

namespace Cashback\Domains\Cashback\Commands;

use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class TransferToBankAccountCommand
 * @package Cashback\Domains\Cashback\Commands
 */
class TransferToBankAccountCommand implements ShouldQueue
{
    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $bank;

    /**
     * @var string
     */
    private $agency;

    /**
     * @var string
     */
    private $checkingAccount;

    /**
     * TransferToBankAccountCommand constructor.
     * @param float $amount
     * @param string $bank
     * @param string $agency
     * @param string $checkingAccount
     */
    public function __construct(float $amount, string $bank, string $agency, string $checkingAccount)
    {
        $this->amount = $amount;
        $this->bank = $bank;
        $this->agency = $agency;
        $this->checkingAccount = $checkingAccount;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @return string
     */
    public function getAgency()
    {
        return $this->agency;
    }

    /**
     * @return string
     */
    public function getCheckingAccount()
    {
        return $this->checkingAccount;
    }
}
