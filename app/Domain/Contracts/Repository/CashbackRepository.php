<?php

namespace Lms\Cashback\Domain\Contracts\Repository;

/**
 * Interface CashbackRepository
 *
 * @package Lms\Cashback\Domain\Repository\Contracts
 */
interface CashbackRepository
{
    public function find(string $accountId);
}
