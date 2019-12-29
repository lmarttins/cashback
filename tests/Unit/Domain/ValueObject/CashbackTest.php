<?php

namespace Tests\Unit\Domain\ValueObject;

use Lms\Cashback\Domain\ValueObject\Cashback;
use TestCase;

/**
 * Class CashbackTest
 *
 * @package Tests\Unit\Domain\ValueObject
 */
class CashbackTest extends TestCase
{
    public function testEquals()
    {
        $cashback1 = new Cashback(10.0, 'percent_off');
        $cashback2 = new Cashback(10.0, 'percent_off');

        $this->assertTrue($cashback1->isEquals($cashback2));
    }

    public function testNotEqual()
    {
        $cashback1 = new Cashback(10.0, 'percent_off');
        $cashback2 = new Cashback(11.0, 'money_off');

        $this->assertFalse($cashback1->isEquals($cashback2));
    }
}
