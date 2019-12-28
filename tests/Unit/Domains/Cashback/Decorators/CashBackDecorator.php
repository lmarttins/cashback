<?php

namespace Unit\Domains\Cashback\Decorators;

use Cashback\Domains\Cashback\Decorators\CashBackChristmasPromotion;
use Cashback\Domains\Cashback\Decorators\CashBackDefault;
use TestCase;

class CashBackDecorator extends TestCase
{
    public function testCanCalculateCashBackDefault()
    {
        $cashBack = new CashBackDefault();

        $purchaseAmount = 2500;

        $this->assertSame(250.0, $cashBack->calculate($purchaseAmount));
    }

    public function testCanCalculateCashBackChristmasPromotion()
    {
        $cashBack = new CashBackDefault();
        $cashBack = new CashBackChristmasPromotion($cashBack);

        $purchaseAmount = 900;

        $this->assertSame(225.0, $cashBack->calculate($purchaseAmount));
    }
}
