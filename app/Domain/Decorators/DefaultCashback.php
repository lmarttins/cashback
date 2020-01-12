<?php

namespace Lms\Cashback\Domain\Decorators;

use Lms\Cashback\Domain\Decorators\Contracts\Cashback;

/**
 * Class DefaultCashback
 *
 * @package GetLms\Cashback\Domain\GetLms\Cashback\Decorators
 */
class DefaultCashback implements Cashback
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
