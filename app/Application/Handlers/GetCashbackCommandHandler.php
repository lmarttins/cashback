<?php

namespace Lms\Cashback\Application\Handlers;

use Lms\Cashback\Application\Command;
use Lms\Cashback\Domain\Repositories\Contracts\CashBackRepository;

/**
 * Class GetCashbackCommandHandler
 *
 * @package Lms\Cashback\Application\Handlers
 */
class GetCashbackCommandHandler
{
    protected $repository;

    public function __construct(CashBackRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle(Command $command)
    {
        return ['cashback' => $this->repository->find($command->accountId)];
    }
}
