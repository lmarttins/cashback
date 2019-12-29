<?php

namespace Lms\Cashback\Application\Providers;

use Illuminate\Support\ServiceProvider;
use Lms\Cashback\Domain\Repositories\Contracts\CashBackRepository;
use Lms\Cashback\Infrastructure\Repositories\InMemoryCashbackRepository;

/**
 * Class BindServiceProvider
 *
 * @package GetLms\Cashback\Domain\GetLms\Cashback\Providers
 */
class BindServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            CashBackRepository::class,
            InMemoryCashbackRepository::class
        );
    }
}
