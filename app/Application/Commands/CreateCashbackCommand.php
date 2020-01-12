<?php

namespace Lms\Cashback\Application\Commands;

use Lms\Cashback\Domain\Command;

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
    public $purchase_amount;

    /**
     * CreateCashbackCommand constructor.
     *
     * @param float $purchase_amount
     */
    public function __construct(float $purchase_amount)
    {
        $this->purchase_amount = $purchase_amount;
    }
}
