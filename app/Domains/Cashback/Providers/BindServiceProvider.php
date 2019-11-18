<?php

namespace Cashback\Domains\Cashback\Providers;

use Cashback\Domains\Cashback\Services;
use Illuminate\Support\ServiceProvider;

/**
 * Class BindServiceProvider
 * @package Cashback\Domains\Cashback\Providers
 */
class BindServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            Services\Contracts\CashOutService::class,
            Services\CashOutService::class
        );
    }
}
