<?php

namespace Lms\Cashback\UI\Api\Http\Actions;

use Lms\Cashback\Application\Commands\GetCashbackCommand;
use Lms\Cashback\Application\Handlers\GetCashbackCommandHandler;
use Lms\Cashback\Support\Http\Controller\Controller;

/**
 * Class GetCashback
 *
 * @package Lms\Cashback\UI\Api\Http\Actions
 */
class GetCashback extends Controller
{
    public function __invoke()
    {
        $data = $this->dispatchNow(
            new GetCashbackCommand('edKm5ZhfoO'),
            app()->make(GetCashbackCommandHandler::class)
        );

        return response()->json($data, 200);
    }
}
