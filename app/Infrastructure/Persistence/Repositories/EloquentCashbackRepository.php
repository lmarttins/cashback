<?php

namespace Lms\Cashback\Infrastructure\Persistence\Repositories;

use Lms\Cashback\Domain\Contracts\Repository\CashbackRepository;

/**
 * Class EloquentCashbackRepository
 *
 * @package Lms\Cashback\Infrastructure\Persistence\Repositories
 */
class EloquentCashbackRepository implements CashbackRepository
{
    public function find(string $accountId)
    {
        //
    }
}
