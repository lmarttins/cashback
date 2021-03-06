<?php

namespace Lms\Cashback\Domain\ValueObject;

use JsonSerializable;

/**
 * Class ValueObject
 *
 * @package Lms\Cashback\Domain\ValueObject
 */
abstract class ValueObject implements JsonSerializable
{
    abstract public function isEquals($valueObject): bool;
}
