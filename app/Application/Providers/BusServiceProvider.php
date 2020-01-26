<?php

namespace Lms\Cashback\Application\Providers;

use Illuminate\Support\Facades\Bus;
use Illuminate\Support\ServiceProvider;
use Lms\Cashback\Application\Commands\CreateCashbackCommand;
use Lms\Cashback\Application\Handlers\CreateCashbackCommandHandler;

/**
 * Class BusServiceProvider
 *
 * @package Lms\Cashback\Application\Providers
 */
class BusServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Bus::map([
            CreateCashbackCommand::class => CreateCashbackCommandHandler::class,
        ]);
    }
}
