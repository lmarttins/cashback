<?php

namespace Lms\Cashback\Domain\Specifications;

/**
 * Interface Specification
 *
 * @package Lms\Cashback\Domain\Specifications
 */
interface Specification
{
    /**
     * @param float $amount
     * @return mixed
     */
    public function isSatisfiedBy(float $amount);
}
