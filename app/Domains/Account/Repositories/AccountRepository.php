<?php

namespace Cashback\Domains\Account\Repositories;

/**
 * Interface AccountRepository
 * @package Cashback\Domains\Account\Repositories
 */
interface AccountRepository
{
    /**
     * @return mixed
     */
    public function getAccount();
}
