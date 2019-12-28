<?php

namespace Cashback\Domains\Cashback\Decorators;

use Cashback\Domains\Cashback\Decorators\Contracts\CashBack;

/**
 * Class DefaultCashBack
 *
 * @package Cashback\Domains\Cashback\Decorators
 */
class DefaultCashBack implements CashBack
{
    const DISCOUNT = 10;

    /**
     * Calculate cashBack.
     *
     * @param float $purchaseAmount
     * @return float
     */
    public function calculate(float $purchaseAmount): float
    {
        return self::DISCOUNT * $purchaseAmount / 100;
    }
}
