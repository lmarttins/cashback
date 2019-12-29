<?php

namespace Lms\Cashback\Application\Commands;

use Lms\Cashback\Domain\Contracts\Command;

/**
 * Class CreateCashbackCommand
 *
 * @package Lms\Cashback\Application\Commands
 */
class CreateCashbackCommand implements Command
{
    /**
     * @var float
     */
    public $purchaseAmount;

    public function __construct(float $purchaseAmount)
    {
        $this->purchaseAmount = $purchaseAmount;
    }
}
