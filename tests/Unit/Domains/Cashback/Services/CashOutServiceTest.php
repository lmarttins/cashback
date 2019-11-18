<?php

namespace Tests\Unit\Domains\Cashback\Services;

use TestCase;
use Cashback\Domains\Account\Models\Account;
use Cashback\Domains\Account\Repositories\AccountRepository;
use Cashback\Domains\Cashback\Services\CashOutService;
use Cashback\Domains\Cashback\Exceptions\InvalidAccumulatedBalanceException;
use Illuminate\Contracts\Bus\QueueingDispatcher;

class CashOutServiceTest extends TestCase
{
    /**
     * @test
     */
    public function shouldWithdrawCashbackWhenTheBalanceIsSufficient()
    {
        $accountRepository = $this->createMock(AccountRepository::class);
        $commandBus = $this->createMock(QueueingDispatcher::class);
        $account = $this->createMock(Account::class);

        $commandBus->expects($this->once())
            ->method('dispatchToQueue');

        $account->method('getBalance')
            ->willReturn(20.00);

        $account->method('getBank')
            ->willReturn('Itau');

        $account->method('getAgency')
            ->willReturn('1234');

        $account->method('getCheckingAccount')
            ->willReturn('05678-9');

        $accountRepository->method('getAccount')
            ->willReturn($account);

        $cashOutService = new CashOutService($accountRepository, $commandBus);

        $actual = $cashOutService->toWithdraw();

        $message = 'Withdrawal successfully';

        $this->assertEquals($message, $actual);
    }

    /**
     * @test
     */
    public function shouldThrowExceptionWhenAccumulatedBalanceIsLower()
    {
        $accountRepository = $this->createMock(AccountRepository::class);
        $commandBus = $this->createMock(QueueingDispatcher::class);
        $account = $this->createMock(Account::class);

        $account->method('getBalance')
            ->willReturn(10.00);

        $accountRepository->method('getAccount')
            ->willReturn($account);

        $cashOutService = new CashOutService($accountRepository, $commandBus);

        $this->expectException(InvalidAccumulatedBalanceException::class);

        $cashOutService->toWithdraw();
    }
}
