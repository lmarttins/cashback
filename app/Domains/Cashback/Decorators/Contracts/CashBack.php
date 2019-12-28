<?php

namespace Cashback\Domains\Cashback\Decorators\Contracts;

/**
 * Interface CalculateCashBack
 *
 * @package Cashback\Domains\Cashback\Decorators\Contracts
 */
interface CashBack
{
    public function calculate(float $purchaseAmount): float;
}
