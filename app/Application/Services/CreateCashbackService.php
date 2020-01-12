<?php

namespace Lms\Cashback\Application\Services;

use Joselfonseca\LaravelTactician\CommandBusInterface;
use Lms\Cashback\Application\Commands\CreateCashbackCommand;
use Lms\Cashback\Application\Handlers\CreateCashbackCommandHandler;
use Lms\Cashback\Application\Validators\CreateCashbackValidator;
use Lms\Cashback\Domain\Services\CreateCashbackService as CreateCashbackServiceContract;

/**
 * Class CreateCashbackService
 *
 * @package Lms\Cashback\Application\Services
 */
class CreateCashbackService implements CreateCashbackServiceContract
{
    protected $middleware = [
        CreateCashbackValidator::class
    ];

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
     * Create cashback.
     *
     * @param array $input
     * @return mixed
     */
    public function create(array $input)
    {
        $this->commandBus->addHandler(
            CreateCashbackCommand::class,
            CreateCashbackCommandHandler::class
        );

        return $this->commandBus->dispatch(
            CreateCashbackCommand::class,
            $input,
            $this->middleware
        );
    }
}
