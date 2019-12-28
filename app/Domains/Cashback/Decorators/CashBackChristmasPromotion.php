<?php

namespace Cashback\Domains\Cashback\Decorators;

use Cashback\Domains\Cashback\Decorators\Contracts\CashBack;

/**
 * Class CashBackChristmasPromotion
 *
 * @package Cashback\Domains\Cashback\Decorators
 */
class CashBackChristmasPromotion implements CashBack
{
    const DISCOUNT = 15;

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
        return self::DISCOUNT * $purchaseAmount / 100;
    }
}
