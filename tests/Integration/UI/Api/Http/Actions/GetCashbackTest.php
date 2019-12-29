<?php

namespace Tests\Integration\UI\Api\Http\Actions;

use TestCase;

/**
 * Class GetCashbackTest
 *
 * @package Tests\Integration\UI\Api\Http\Actions
 */
class GetCashbackTest extends TestCase
{
    public function testShouldResponseSuccess()
    {
        $response = $this->call('GET', '/api/v1/cashback');

        $this->assertEquals(200, $response->status());
    }
}
