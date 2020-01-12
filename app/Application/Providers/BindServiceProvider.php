<?php

namespace Lms\Cashback\Application\Providers;

use Illuminate\Support\ServiceProvider;
use Lms\Cashback\Domain\Repositories\CashbackRepository;
use Lms\Cashback\Domain\Services\CreateCashbackService as CreateCashbackServiceContract;
use Lms\Cashback\Application\Services\CreateCashbackService;
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

        $this->app->bind(
            CreateCashbackServiceContract::class,
            CreateCashbackService::class
        );
    }
}
