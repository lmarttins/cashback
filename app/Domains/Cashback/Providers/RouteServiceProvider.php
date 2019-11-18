<?php

namespace Cashback\Domains\Cashback\Providers;

use Cashback\Domains\Cashback\Http\Routes\DomainRoute;
use Illuminate\Support\ServiceProvider;

/**
 * Class RouteServiceProvider
 * @package Cashback\Domains\Cashback\Providers
 */
class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Cashback\Domains\Cashback\Http\Actions';

    public function register()
    {
        (new DomainRoute([
            'namespace' => $this->namespace,
            'prefix'    => 'api',
        ]))->register();
    }
}
