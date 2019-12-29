<?php

namespace Lms\Cashback\UI\Api\Http\Actions;

use Illuminate\Http\Request;
use Lms\Cashback\Application\Commands\CreateCashbackCommand;
use Lms\Cashback\Application\Handlers\RegisterCashbackCommandHandler;
use Lms\Cashback\Framework\Http\Controller\Controller;

/**
 * Class CreateCashback
 *
 * @package Lms\Cashback\UI\Api\Http\Actions
 */
class CreateCashback extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $this->dispatchNow(
            new CreateCashbackCommand($request->get('purchase_amount')),
            app()->make(RegisterCashbackCommandHandler::class)
        );

        return response()->json($data, 200);
    }
}
