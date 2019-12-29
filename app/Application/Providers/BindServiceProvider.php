<?php

namespace Lms\Cashback\Application\Providers;

use Illuminate\Support\ServiceProvider;
use Lms\Cashback\Domain\Contracts\Repository\CashbackRepository;
use Lms\Cashback\Infrastructure\Persistence\Repositories\InMemoryCashbackRepository;

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
            CashbackRepository::class,
            InMemoryCashbackRepository::class
        );
    }
}
