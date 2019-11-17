<?php

namespace Tests\Unit\Domains\Cashback\Services;

use TestCase;
use Cashback\Domains\Cashback\Services\CashbackService;
use Cashback\Domains\Cashback\Repositories\Contracts\CashbackRepository;
use Cashback\Domains\Cashback\Exceptions\InvalidPaidAmountException;

class CashbackServiceTest extends TestCase
{
    /**
     * @test
     */
    public function shouldReturnCashbackRefund()
    {
        $cashbackRepository = $this->createMock(CashbackRepository::class);

        $cashbackRepository->method('from')
            ->willReturn(10.00);

        $cashbackRepository->method('getCashbackValue')
            ->willReturn(10.00);

        $amountPaid = 10.00;

        $cashbackService = new CashbackService($cashbackRepository);

        $actual = $cashbackService->getCashback($amountPaid);

        $this->assertEquals(10.00, $actual);
    }

    /**
     * @test
     */
    public function shouldThrowExceptionWhenPaidAmountIsLessThanSetAmount()
    {
        $cashbackRepository = $this->createMock(CashbackRepository::class);

        $cashbackRepository->method('from')
            ->willReturn(10.00);

        $amountPaid = 5.00;

        $cashbackService = new CashbackService($cashbackRepository);

        $this->expectException(InvalidPaidAmountException::class);

        $cashbackService->getCashback($amountPaid);
    }
}
