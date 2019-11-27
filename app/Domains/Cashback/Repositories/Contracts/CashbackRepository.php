<?php

namespace Cashback\Domains\Cashback\Repositories\Contracts;

/**
 * Interface CashbackRepository
 *
 * @package Cashback\Domains\Cashback\Repositories\Contracts
 */
interface CashbackRepository
{
    /**
     * @return float
     */
    public function from(): float;

    /**
     * @return float
     */
    public function getCashbackValue(): float;
}
