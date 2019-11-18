<?php

namespace Cashback\Domains\Cashback\Providers;

use Cashback\Domains\Cashback\Commands\Handlers\TransferToBankAccountCommandHandler;
use Cashback\Domains\Cashback\Commands\TransferToBankAccountCommand;
use Illuminate\Contracts\Bus\Dispatcher;
use Illuminate\Support\ServiceProvider;

/**
 * Class CommandBusServiceProvider
 * @package Cashback\Domains\Cashback\Providers
 */
class CommandBusServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $bus = $this->app->make(Dispatcher::class);

        $bus->map([
            TransferToBankAccountCommand::class => TransferToBankAccountCommandHandler::class
        ]);
    }
}
