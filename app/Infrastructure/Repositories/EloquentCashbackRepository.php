<?php

namespace Lms\Cashback\Infrastructure\Repositories;

use Lms\Cashback\Domain\Contracts\Repository\CashbackRepository;

/**
 * Class EloquentCashbackRepository
 *
 * @package GetLms\Cashback\Infrastructure\Repository
 */
class EloquentCashbackRepository implements CashbackRepository
{
    public function find(string $accountId)
    {
        //
    }
}
