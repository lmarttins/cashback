<?php

namespace Lms\Cashback\Domain\Specifications;

use Lms\Cashback\Domain\ValueObject\Item;

/**
 * Class OrSpecification
 *
 * @package Lms\Cashback\Domain\Specifications
 */
class OrSpecification implements Specification
{
    /**
     * @var Specification[]
     */
    private $specifications;

    /**
     * OrSpecification constructor.
     *
     * @param Specification ...$specifications
     */
    public function __construct(Specification ...$specifications)
    {
        $this->specifications = $specifications;
    }

    /**
     * Is satisfied by or specification.
     *
     * @param float $amount
     * @return bool
     */
    public function isSatisfiedBy(float $amount): bool
    {
        foreach ($this->specifications as $specification) {
            if ($specification->isSatisfiedBy($amount)) {
                return true;
            }
        }

        return false;
    }
}
