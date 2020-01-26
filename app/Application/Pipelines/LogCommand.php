<?php

namespace Lms\Cashback\Application\Pipelines;

use Closure;
use Psr\Log\LoggerInterface;

/**
 * Class LogCommand
 *
 * @package Lms\Cashback\Application\Pipelines
 */
class LogCommand
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * LogCommand constructor.
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param $command
     * @param Closure $next
     * @return mixed
     */
    public function handle($command, Closure $next)
    {
        $result = $next($command);

        $this->logger->info('Command handled: '.get_class($command));

        return $result;
    }
}
