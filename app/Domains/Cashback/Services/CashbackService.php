<?php

namespace Cashback\Domains\Cashback\Services;

use Cashback\Domains\Cashback\Exceptions\InvalidPaidAmountException;
use Cashback\Domains\Cashback\Repositories\Contracts\CashbackRepository;

/**
 * Class CashbackService
 *
 * @package Cashback\Domains\Cashback\Services
 */
class CashbackService
{
    /**
     * @var CashbackRepository
     */
    private $cashbackRepository;

    /**
     * CashbackService constructor.
     *
     * @param CashbackRepository $cashbackRepository
     */
    public function __construct(CashbackRepository $cashbackRepository)
    {
        $this->cashbackRepository = $cashbackRepository;
    }

    /**
     * @param $amountPaid
     * @return float
     * @throws InvalidPaidAmountException
     */
    public function getCashback($amountPaid): float
    {
        $from = $this->cashbackRepository->from();

        if ($amountPaid < $from) {
           throw new InvalidPaidAmountException();
        }

        return $this->cashbackRepository->getCashbackValue();
    }
}
