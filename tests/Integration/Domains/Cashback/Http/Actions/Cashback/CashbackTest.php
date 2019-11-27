<?php

namespace Tests\Integration\Domains\Cashback\Http\Actions\Cashback;

use TestCase;

/**
 * Class CashbackTest
 *
 * @package Tests\Integration\Domains\Cashback\Http\Actions\Cashback
 */
class CashbackTest extends TestCase
{
    /**
     * @test
     */
    public function shouldResponseError()
    {
        $response = $this->call('GET', '/api/v1/cashback');

        $this->assertEquals(200, $response->status());
        $this->assertEquals(['message' => 'success'], (array) $response->getData());
    }
}
