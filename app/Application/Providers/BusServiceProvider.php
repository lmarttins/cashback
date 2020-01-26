<?php

namespace Lms\Cashback\Application\Providers;

use Illuminate\Support\Facades\Bus;
use Illuminate\Support\ServiceProvider;
use Lms\Cashback\Application\Commands\CreateCashbackCommand;
use Lms\Cashback\Application\Handlers\CreateCashbackCommandHandler;
use Lms\Cashback\Application\Pipelines\LogCommand;

/**
 * Class BusServiceProvider
 *
 * @package Lms\Cashback\Application\Providers
 */
class BusServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerCommandHandlers();
        $this->registerPipelines();
    }

    /**
     * Register any command handler.
     */
    private function registerCommandHandlers()
    {
        Bus::map([
            CreateCashbackCommand::class => CreateCashbackCommandHandler::class,
        ]);
    }

    /**
     * Register any pipeline.
     */
    private function registerPipelines()
    {
        Bus::pipeThrough([
            LogCommand::class,
        ]);
    }
}
