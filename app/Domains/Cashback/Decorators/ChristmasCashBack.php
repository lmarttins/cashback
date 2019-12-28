<?php

namespace Cashback\Domains\Cashback\Decorators;

use Cashback\Domains\Cashback\Decorators\Contracts\CashBack;

/**
 * Class ChristmasCashBack
 *
 * @package Cashback\Domains\Cashback\Decorators
 */
class ChristmasCashBack implements CashBack
{
    private const DISCOUNT = 15;

    /**
     * @var CashBack
     */
    protected  $cashBack;

    public function __construct(CashBack $cashBack)
    {
        $this->cashBack = $cashBack;
    }

    /**
     * Calculate cashBack.
     *
     * @param float $purchaseAmount
     * @return float
     */
    public function calculate(float $purchaseAmount): float
    {
        $previous = $this->cashBack->calculate($purchaseAmount);
        $next = self::DISCOUNT * $purchaseAmount / 100;

        return $previous + $next;
    }
}
