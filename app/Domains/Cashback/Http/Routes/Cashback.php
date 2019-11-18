<?php

namespace Cashback\Domains\Cashback\Http\Routes;

use Cashback\Application\Http\Router\Route;

/**
 * Class Cashback
 * @package Cashback\Domains\Cashback\Http\Routes
 */
class Cashback extends Route
{
    /**
     * Set routes
     *
     * @return void
     */
    protected function routes()
    {
        $this->router->group(['prefix' => 'v1'], function () {
            $this->router->get('cashback', 'Cashback');
        });
    }
}
