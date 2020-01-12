<?php

namespace Lms\Cashback\Application\Validators;

use League\Tactician\Middleware;
use Lms\Cashback\Application\Exceptions\CommandValidationException;
use Lms\Cashback\Domain\Specifications\OrSpecification;
use Lms\Cashback\Domain\Specifications\PurchaseAmountSpecification;

/**
 * Class CreateCashbackValidator
 *
 * @package Lms\Cashback\Application\Validators
 */
class CreateCashbackValidator implements Middleware
{
    /**
     * Execute validation.
     *
     * @param object $command
     * @param callable $next
     * @return mixed
     * @throws CommandValidationException
     */
    public function execute($command, callable $next)
    {
        $specification = new PurchaseAmountSpecification(10, 100);
        $orSpecification = new OrSpecification($specification);

        $isSatisfiedBy = $orSpecification->isSatisfiedBy($command->purchase_amount);

        if (!$isSatisfiedBy) {
            throw new CommandValidationException('Purchase amount invalid.');
        }

        return $next($command);
    }
}
