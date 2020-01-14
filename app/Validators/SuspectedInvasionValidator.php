<?php

namespace Lms\Cashback\Validators;

class SuspectedInvasionValidator
{
    /**
     * @var string|int
     */
    private $consumerId;

    /**
     * @var RequestAuthorizationService
     */
    private $service;

    /**
     * @var array
     */
    private $payload;

    public function __construct(
        $consumerId,
        RequestAuthorizationService $service
    ) {
        $this->consumerId = $consumerId;
        $this->service = $service;
    }

    /**
     * Rules change device validation.
     *
     * @param int $days
     * @return bool
     */
    public function changeDeviceValidation(int $days): bool
    {
        $changeDeviceSpec = new ChangeDeviceSpecification($days, $this->payload);

        return $changeDeviceSpec->isSatisfiedBy();
    }

    /**
     * Rules password reset validation.
     *
     * @param int $days
     * @return bool
     */
    public function passwordResetValidation(int $days): bool
    {
        $passwordResetSpec = new PasswordResetSpecification($days, $this->payload);

        return $passwordResetSpec->isSatisfiedBy();
    }

    public function getPayload()
    {
        $this->payload = $this->service->get($this->consumerId);

        return $this;
    }
}
