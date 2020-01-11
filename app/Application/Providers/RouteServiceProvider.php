<?php

namespace Lms\Cashback\Application\Providers;

use Lms\Cashback\Interfaces\Api\Http\Routes\DomainRoute;
use Illuminate\Support\ServiceProvider;

/**
 * Class RouteServiceProvider
 *
 * @package Lms\Cashback\Application\Providers
 */
class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Lms\Cashback\Interfaces\Api\Http\Actions';

    public function register()
    {
        (new DomainRoute([
            'namespace' => $this->namespace,
            'prefix'    => 'api',
        ]))->register();
    }
}
