<?php

namespace Cashback\Domains\Cashback\Http\Actions\Cashback;

use Cashback\Application\Http\Controller\Controller;
use Cashback\Domains\Cashback\Exceptions\InvalidAccumulatedBalanceException;
use Cashback\Domains\Cashback\Services\Contracts\CashOutService;

/**
 * Class Cashback
 * @package Cashback\Domains\Cashback\Http\Actions\Cashback
 */
class Cashback extends Controller
{
    public function __invoke(CashOutService $service)
    {
        try {
            $service->toWithdraw();
        } catch (InvalidAccumulatedBalanceException $e) {
            response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
