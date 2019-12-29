<?php

namespace Lms\Cashback\Domain\Decorators\Contracts;

/**
 * Interface Cashback
 *
 * @package Lms\Cashback\Domain\Decorators\Contracts
 */
interface Cashback
{
    public function calculate(float $purchaseAmount): float;
}
