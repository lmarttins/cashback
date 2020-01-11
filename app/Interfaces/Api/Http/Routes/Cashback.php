<?php

namespace Lms\Cashback\Interfaces\Api\Http\Routes;

use Lms\Cashback\Framework\Http\Router\Route;

/**
 * Class Cashback
 *
 * @package Lms\Cashback\Interfaces\Api\Http\Routes
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
            $this->router->post('cashback', 'CreateCashback');
        });
    }
}
