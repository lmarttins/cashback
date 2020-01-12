<?php

namespace Lms\Cashback\Domain\Specifications;

/**
 * Class PurchaseAmountSpecification
 *
 * @package Lms\Cashback\Domain\Specifications
 */
class PurchaseAmountSpecification implements Specification
{
    /**
     * @var float
     */
    protected $minAmount;

    /**
     * @var float
     */
    protected $maxAmount;

    /**
     * PurchaseAmountSpecification constructor.
     *
     * @param float $minAmount
     * @param float $maxAmount
     */
    public function __construct(float $minAmount, float $maxAmount)
    {
        $this->minAmount = $minAmount;
        $this->maxAmount = $maxAmount;
    }

    /**
     * @param float $amount
     * @return bool
     */
    public function isSatisfiedBy(float $amount): bool
    {
        if ($this->maxAmount !== null && $amount > $this->maxAmount) {
            return false;
        }

        if ($this->minAmount !== null && $amount < $this->minAmount) {
            return false;
        }

        return true;
    }
}
