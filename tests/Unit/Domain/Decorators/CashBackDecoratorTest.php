<?php

namespace Unit\Domains\Lms\Cashback\Decorators;

use Lms\Cashback\Domain\Decorators\ChristmasCashback;
use Lms\Cashback\Domain\Decorators\DefaultCashback;
use TestCase;

class CashBackDecoratorTest extends TestCase
{
    public function testCanCalculateCashBackDefault()
    {
        $cashback = new DefaultCashback();

        $purchaseAmount = 2500;

        $this->assertSame(250.0, $cashback->calculate($purchaseAmount));
    }

    public function testCanCalculatesDefaultCashBackPlusChristmasCashBack()
    {
        $cashback = new DefaultCashback();
        $cashback = new ChristmasCashback($cashback);

        $purchaseAmount = 900;

        $this->assertSame(225.0, $cashback->calculate($purchaseAmount));
    }
}
