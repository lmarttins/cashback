<?php

namespace Unit;

use Lms\Cashback\Validators\RequestAuthorizationService;
use Lms\Cashback\Validators\SuspectedInvasionValidator;
use TestCase;

class SuspectedInvasionValidatorTest extends TestCase
{
    public function testCan()
    {
        $consumerId = 1;

        $request = $this->createMock(RequestAuthorizationService::class);

        $response = [
            'change_device'  => '2020-01-10 23:21:00',
            'password_reset' => '2020-01-13 00:00:00'
        ];

        $request->expects($this->once())
            ->method('get')
            ->with($consumerId)
            ->willReturn($response);

        $validator = new SuspectedInvasionValidator($consumerId, $request);

        $expected = [
            'change_device'  => true,
            'password_reset' => true
        ];

        $this->assertEquals($expected, $validator->validation(2));
    }
}
