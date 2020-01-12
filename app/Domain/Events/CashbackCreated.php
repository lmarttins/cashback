<?php

namespace Lms\Cashback\Domain\Events;

use Illuminate\Support\Facades\Log;
use Lms\Cashback\Domain\ValueObject\Cashback;
use Lms\Cashback\Support\Jobs\Job;

/**
 * Class CashbackCreated
 *
 * @package Lms\Cashback\Domain\Events
 */
class CashbackCreated extends Job
{
    protected $cashback;

    /**
     * Create a new job instance.
     *
     * @param Cashback $cashback
     * @return void
     */
    public function __construct(Cashback $cashback)
    {
        $this->cashback = $cashback;
    }

    /**
     * Event handle.
     *
     * @return void
     */
    public function handle()
    {
        Log::info('[Event::CashbackCreated]: ', [$this->cashback]);
    }
}
