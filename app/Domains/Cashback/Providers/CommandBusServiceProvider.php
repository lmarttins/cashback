<?php

namespace Cashback\Domains\Cashback\Providers;

use Cashback\Domains\Cashback\Commands\Handlers\TransferToBankAccountCommandHandler;
use Cashback\Domains\Cashback\Commands\TransferToBankAccountCommand;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\ServiceProvider;

/**
 * Class CommandBusServiceProvider
 * @package Cashback\Domains\Cashback\Providers
 */
class CommandBusServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Bus::map([
            TransferToBankAccountCommand::class => TransferToBankAccountCommandHandler::class
        ]);
    }
}
