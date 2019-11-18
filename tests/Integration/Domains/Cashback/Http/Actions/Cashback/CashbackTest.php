<?php

namespace Tests\Integration\Domains\Cashback\Http\Actions\Cashback;

use TestCase;

class CashbackTest extends TestCase
{
    /**
     * @test
     */
    public function shouldResponseError()
    {
        $response = $this->call('GET', '/api/v1/cashback');

        $this->assertEquals(500, $response->status());
    }
}
