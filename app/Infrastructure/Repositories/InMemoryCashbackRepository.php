<?php

namespace Lms\Cashback\Infrastructure\Repositories;

use Lms\Cashback\Domain\Contracts\Repository\CashbackRepository;

/**
 * Class InMemoryCashbackRepository
 *
 * @package Lms\Cashback\Infrastructure\Repository
 */
class InMemoryCashbackRepository implements CashbackRepository
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
