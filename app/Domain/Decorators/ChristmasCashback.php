<?php

namespace Lms\Cashback\Domain\Decorators;

use Lms\Cashback\Domain\Decorators\Contracts\Cashback;

/**
 * Class ChristmasCashback
 *
 * @package GetLms\Cashback\Domain\GetLms\Cashback\Decorators
 */
class ChristmasCashback implements Cashback
{
    private const DISCOUNT = 15;

    /**
     * @var Cashback
     */
    protected $cashBack;

    public function __construct(Cashback $cashBack)
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
