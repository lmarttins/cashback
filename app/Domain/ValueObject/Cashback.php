<?php

namespace Lms\Cashback\Domain\ValueObject;

/**
 * Class Cashback
 *
 * @package Lms\Cashback\Domain\ValueObject
 */
class Cashback extends ValueObject
{

    /**
     * @var float
     */
    private $value;

    /**
     * @var string
     */
    private $type;

    /**
     * Cashback constructor.
     *
     * @param float $value
     * @param string $type
     */
    public function __construct(float $value, string $type)
    {
        $this->value = $value;
        $this->type = $type;
    }

    /**
     * Equals value object Cashback.
     *
     * @param Cashback $cashback
     * @return bool
     */
    public function isEquals($cashback): bool
    {
        return $this->value === $cashback->value &&
            $this->type === $cashback->type;
    }

    /**
     * Json serialize.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'value' => $this->value,
            'type' => $this->type
        ];
    }
}
