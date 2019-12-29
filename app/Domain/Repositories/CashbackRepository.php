<?php

namespace Lms\Cashback\Domain\Repositories\Contracts;

/**
 * Interface CashBackRepository
 *
 * @package Lms\Cashback\Domain\Repositories\Contracts
 */
interface CashBackRepository
{
   public function find(string $accountId);
}
