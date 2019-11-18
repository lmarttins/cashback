<?php

namespace Cashback\Application\Http\Router;

/**
 * Class Route
 * @package Cashback\Application\Http\Route
 */
abstract class Route
{
    /**
     * Options to route
     *
     * @var array
     */
    protected $options;

    /**
     * Route
     */
    protected $router;

    /**
     * Route constructor class
     *
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->options = $options;
        $this->router  = app('router');
    }

    /**
     * Define routes
     *
     * @return void
     */
    public function register()
    {
        $this->router->group($this->options, function () {
            $this->routes();
        });
    }

    /**
     * Set routes
     *
     * @return void
     */
    abstract protected function routes();
}
