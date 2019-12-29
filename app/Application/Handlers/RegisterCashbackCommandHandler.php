<?php

namespace Lms\Cashback\Application\Handlers;

use Lms\Cashback\Domain\Contracts\Command;
use Lms\Cashback\Domain\Decorators\ChristmasCashback;
use Lms\Cashback\Domain\Decorators\DefaultCashback;
use Lms\Cashback\Domain\ValueObject\Cashback;

/**
 * Class RegisterCashbackCommandHandler
 *
 * @package Lms\Cashback\Application\Handlers
 */
class RegisterCashbackCommandHandler
{
    public function handle(Command $command)
    {
        $cashback = new DefaultCashback();
        $cashback = new ChristmasCashback($cashback);

        $discount = $cashback->calculate($command->purchaseAmount);

        return new Cashback($discount, 'money_off');
    }
}
