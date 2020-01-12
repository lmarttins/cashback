<?php

namespace Unit\Domain\Specifications;

use Lms\Cashback\Domain\Specifications\OrSpecification;
use Lms\Cashback\Domain\Specifications\PurchaseAmountSpecification;
use TestCase;

class PurchaseAmountSpecificationTest extends TestCase
{
    public function testCanOr()
    {
        $spec1 = new PurchaseAmountSpecification(10, 100);
        $spec2 = new PurchaseAmountSpecification(11, 99);

        $orSpec = new OrSpecification($spec1, $spec2);

        $this->assertFalse($orSpec->isSatisfiedBy(200));
        $this->assertTrue($orSpec->isSatisfiedBy(99));
        $this->assertTrue($orSpec->isSatisfiedBy(10));
    }
}
