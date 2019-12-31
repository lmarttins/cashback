<?php

namespace Lms\Cashback\Domain\Events;

use Lms\Cashback\Domain\ValueObject\Cashback;
use Lms\Cashback\Framework\Jobs\Job;

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
}
