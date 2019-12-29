<?php

namespace Tests\Integration\UI\Api\Http\Actions;

use TestCase;

/**
 * Class CreateCashbackTest
 *
 * @package Tests\Integration\UI\Api\Http\Actions
 */
class CreateCashbackTest extends TestCase
{
    public function testShouldResponseSuccess()
    {
        $response = $this->call('POST', '/api/v1/cashback', ['purchase_amount' => 1000]);

        $this->assertEquals(200, $response->status());
    }
}
