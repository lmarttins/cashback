<?php

namespace Lms\Cashback\Application\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class DomainServiceProvider
 * @package GetLms\Cashback\Domain\GetLms\Cashback\Providers
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
        $this->app->register(RouteServiceProvider::class);
        $this->app->register(BusServiceProvider::class);
    }
}
