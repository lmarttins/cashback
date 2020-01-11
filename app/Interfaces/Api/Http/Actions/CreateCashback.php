<?php

namespace Lms\Cashback\Interfaces\Api\Http\Actions;

use Illuminate\Http\Request;
use Joselfonseca\LaravelTactician\CommandBusInterface;
use Lms\Cashback\Application\Commands\CreateCashbackCommand;
use Lms\Cashback\Application\Handlers\CreateCashbackCommandHandler;
use Lms\Cashback\Framework\Http\Controller\Controller;

/**
 * Class CreateCashback
 *
 * @package Lms\Cashback\Interfaces\Api\Http\Actions
 */
class CreateCashback extends Controller
{
    /**
     * @var CommandBusInterface
     */
    protected $commandBus;

    /**
     * CreateCashback constructor.
     *
     * @param CommandBusInterface $commandBus
     */
    public function __construct(CommandBusInterface $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request)
    {
        $this->commandBus->addHandler(
            CreateCashbackCommand::class,
            CreateCashbackCommandHandler::class
        );

        $response = $this->commandBus->dispatch(
            CreateCashbackCommand::class,
            ['purchaseAmount' => $request->get('purchase_amount')]
        );

        return response()->json($response, 200);
    }
}
