<?php

namespace Lms\Cashback\Domain\Contracts\Decorator;

/**
 * Interface Cashback
 *
 * @package Lms\Cashback\Domain\Decorators\Contracts
 */
interface Cashback
{
    public function calculate(float $purchaseAmount): float;
}
