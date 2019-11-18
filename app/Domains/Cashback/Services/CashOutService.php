<?php

namespace Cashback\Domains\Cashback\Services;

use Cashback\Domains\Account\Repositories\AccountRepository;
use Cashback\Domains\Cashback\Commands\TransferToBankAccountCommand;
use Cashback\Domains\Cashback\Exceptions\InvalidAccumulatedBalanceException;
use Cashback\Domains\Cashback\Services\Contracts\CashOutService as CashOutServiceContract;
use Illuminate\Contracts\Bus\QueueingDispatcher;

/**
 * Class CashOutService
 * @package Cashback\Domains\Cashback\Services
 */
class CashOutService implements CashOutServiceContract
{
    const WITHDRAW_FROM = 20.00;

    /**
     * @var AccountRepository
     */
    private $accountRepository;

    /**
     * @var QueueingDispatcher
     */
    private $commandBus;

    /**
     * CashOutService constructor.
     * @param AccountRepository $accountRepository
     * @param QueueingDispatcher $commandBus
     */
    public function __construct(
        AccountRepository $accountRepository,
        QueueingDispatcher $commandBus
    ) {
        $this->accountRepository = $accountRepository;
        $this->commandBus = $commandBus;
    }

    /**
     * @return string
     * @throws InvalidAccumulatedBalanceException
     */
    public function toWithdraw()
    {
        $account = $this->accountRepository->getAccount();

        if ($account->getBalance() < self::WITHDRAW_FROM) {
            throw new InvalidAccumulatedBalanceException(
                'O saldo acumulado não é o suficiente.'
            );
        }

        $command = new TransferToBankAccountCommand(
            $account->getBalance(),
            $account->getBank(),
            $account->getAgency(),
            $account->getCheckingAccount()
        );

        $this->commandBus->dispatchToQueue($command);

        return 'Withdrawal successfully';
    }
}
