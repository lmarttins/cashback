<?php

namespace Tests\Integration\Domains\Cashback\Http\Actions\Cashback;

use TestCase;

class CashbackTest extends TestCase
{
    public function testBasicExample()
    {
        $this->json('GET', '/api/v1/cashback')
            ->seeJson([
               'message' => 'cashback'
            ]);
    }
}
