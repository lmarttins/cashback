<?php

namespace Lms\Cashback\Application\Services;

use Lms\Cashback\Application\Commands\CreateCashbackCommand;
use Lms\Cashback\Domain\Services\CreateCashbackService as CreateCashbackServiceContract;

/**
 * Class CreateCashbackService
 *
 * @package Lms\Cashback\Application\Services
 */
class CreateCashbackService implements CreateCashbackServiceContract
{
    /**
     * Create cashback.
     *
     * @param array $input
     * @return mixed
     */
    public function create(array $input)
    {
        return dispatch_now(
            new CreateCashbackCommand($input['purchase_amount'])
        );
    }
}
