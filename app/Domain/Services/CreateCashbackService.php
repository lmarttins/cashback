<?php

namespace Lms\Cashback\Domain\Services;

/**
 * Interface CreateCashbackService
 *
 * @package Lms\Cashback\Domain\Contracts\Services
 */
interface CreateCashbackService
{
    public function create(array $input);
}
