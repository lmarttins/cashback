<?php

namespace Lms\Cashback\Domain\Repositories;

/**
 * Interface CashbackRepository
 *
 * @package Lms\Cashback\Domain\Repository\Contracts
 */
interface CashbackRepository
{
    public function find(string $accountId);
}
