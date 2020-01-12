<?php

namespace Lms\Cashback\Domain\Specifications;

use Lms\Cashback\Domain\ValueObject\Item;

/**
 * Interface Specification
 *
 * @package Lms\Cashback\Domain\Specifications
 */
interface Specification
{
    public function isSatisfiedBy(float $amount);
}
