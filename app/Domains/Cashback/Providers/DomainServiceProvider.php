<?php

namespace Cashback\Domains\Cashback\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class DomainServiceProvider
 * @package Cashback\Domains\Cashback\Providers
 */
class DomainServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(BindServiceProvider::class);
        $this->app->register(CommandBusServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }
}
