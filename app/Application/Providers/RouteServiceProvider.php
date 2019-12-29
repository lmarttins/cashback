<?php

namespace Lms\Cashback\Application\Providers;

use Lms\Cashback\UI\Api\Http\Routes\DomainRoute;
use Illuminate\Support\ServiceProvider;

/**
 * Class RouteServiceProvider
 *
 * @package Lms\Cashback\Application\Providers
 */
class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Lms\Cashback\UI\Api\Http\Actions';

    public function register()
    {
        (new DomainRoute([
            'namespace' => $this->namespace,
            'prefix'    => 'api',
        ]))->register();
    }
}
