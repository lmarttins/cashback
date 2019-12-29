<?php

namespace Unit\Domains\Lms\Cashback\Decorators;

use Lms\Cashback\Domain\Decorators\ChristmasCashback;
use Lms\Cashback\Domain\Decorators\DefaultCashback;
use TestCase;

class CashBackDecoratorTest extends TestCase
{
    public function testCanCalculateCashBackDefault()
    {
        $cashBack = new DefaultCashback();

        $purchaseAmount = 2500;

        $this->assertSame(250.0, $cashBack->calculate($purchaseAmount));
    }

    public function testCanCalculatesDefaultCashBackPlusChristmasCashBack()
    {
        $cashBack = new DefaultCashback();
        $cashBack = new ChristmasCashback($cashBack);

        $purchaseAmount = 900;

        $this->assertSame(225.0, $cashBack->calculate($purchaseAmount));
    }
}
