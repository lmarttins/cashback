<?php

namespace Lms\Cashback\Application\Handlers;

use Lms\Cashback\Domain\Command;
use Lms\Cashback\Domain\Decorators\ChristmasCashback;
use Lms\Cashback\Domain\Decorators\DefaultCashback;
use Lms\Cashback\Domain\Events\CashbackCreated;
use Lms\Cashback\Domain\ValueObject\Cashback;

/**
 * Class CreateCashbackCommandHandler
 *
 * @package Lms\Cashback\Application\Handlers
 */
class CreateCashbackCommandHandler
{
    /**
     * Command handle.
     *
     * @param Command $command
     * @return ChristmasCashback|DefaultCashback|Cashback
     */
    public function handle(Command $command)
    {
        $cashback = new DefaultCashback();
        $cashback = new ChristmasCashback($cashback);

        $discount = $cashback->calculate($command->purchase_amount);

        $cashback = new Cashback($discount, 'money_off');

        dispatch(new CashbackCreated($cashback));

        return $cashback;
    }
}
