<?php

namespace Lms\Cashback\Interfaces\Api\Http\Actions;

use Illuminate\Http\Request;
use Lms\Cashback\Application\Exceptions\CommandValidationException;
use Lms\Cashback\Domain\Services\CreateCashbackService;
use Lms\Cashback\Support\Http\Controller\Controller;

/**
 * Class CreateCashback
 *
 * @package Lms\Cashback\Interfaces\Api\Http\Actions
 */
class CreateCashback extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(
        Request $request,
        CreateCashbackService $service
    ) {
        try {
            $response = $service->create($request->all());

            return response()->json($response, 200);

        } catch (CommandValidationException $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }
}
