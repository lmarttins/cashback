<?php

namespace Lms\Cashback\Infrastructure\Repositories;

use Lms\Cashback\Domain\Repositories\Contracts\CashBackRepository;

/**
 * Class InMemoryCashbackRepository
 *
 * @package Lms\Cashback\Infrastructure\Repositories
 */
class InMemoryCashbackRepository implements CashBackRepository
{
    protected const ACCOUNTS = [
        'edKm5ZhfoO' => [
            'cashback' => 10.00
        ]
    ];

    public function find(string $accountId)
    {
        return self::ACCOUNTS[$accountId]['cashback'];
    }
}
