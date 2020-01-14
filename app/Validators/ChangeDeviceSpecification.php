<?php

namespace Lms\Cashback\Validators;

use Carbon\Carbon;

class ChangeDeviceSpecification
{
    /**
     * @var int
     */
    private $days;

    /**
     * @var array
     */
    private $payload;

    public function __construct(int $days, array $payload)
    {
        $this->days = $days;
        $this->payload = $payload;
    }

    public function isSatisfiedBy(): bool
    {
        $now = Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now())
            ->setTimezone('America/Sao_Paulo');

        $changeDevice = Carbon::parse($this->payload['change_device']);

        $diff = $now->diffInDays($changeDevice);

        return $diff <= $this->days;
    }
}
