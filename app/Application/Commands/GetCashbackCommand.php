<?php

namespace Lms\Cashback\Application\Commands;

use Lms\Cashback\Application\Command;

/**
 * Class GetCashbackCommand
 *
 * @package Lms\Cashback\Application\Commands
 */
class GetCashbackCommand implements Command
{
    /**
     * @var string
     */
    public $accountId;

    public function __construct(string $accountId)
    {
        $this->accountId = $accountId;
    }
}
