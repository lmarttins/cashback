<?php

namespace Lms\Cashback\UI\Api\Http\Routes;

use Lms\Cashback\Framework\Http\Router\Route;

/**
 * Class DomainRoute
 *
 * @package \Imovs\Ads\Domain\Ads\Http\Routes
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
        (new Cashback())->register();
    }
}
