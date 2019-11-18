<?php

namespace Cashback\Domains\Cashback\Http\Routes;

use Cashback\Application\Http\Router\Route;

/**
 * Class DomainRoute
 *
 * @package \Imovs\Ads\Domains\Ads\Http\Routes
 */
class DomainRoute extends Route
{
    /**
     * Set routes
     *
     * @return void
     */
    protected function routes()
    {
        (new Cashback([
            'namespace' => 'Cashback'
        ]))->register();
    }
}
