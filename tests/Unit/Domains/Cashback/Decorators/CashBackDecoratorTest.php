<?php

namespace Unit\Domains\Cashback\Decorators;

use Cashback\Domains\Cashback\Decorators\ChristmasCashBack;
use Cashback\Domains\Cashback\Decorators\DefaultCashBack;
use TestCase;

class CashBackDecoratorTest extends TestCase
{
    public function testCanCalculateCashBackDefault()
    {
        $cashBack = new DefaultCashBack();

        $purchaseAmount = 2500;

        $this->assertSame(250.0, $cashBack->calculate($purchaseAmount));
    }

    public function testCanCalculatesDefaultCashBackPlusChristmasCashBack()
    {
        $cashBack = new DefaultCashBack();
        $cashBack = new ChristmasCashBack($cashBack);

        $purchaseAmount = 900;

        $this->assertSame(225.0, $cashBack->calculate($purchaseAmount));
    }
}
