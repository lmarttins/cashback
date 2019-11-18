<?php

namespace Cashback\Application\Events;

use Illuminate\Queue\SerializesModels;

/**
 * Class Event
 * @package Cashback\Application\Events
 */
abstract class Event
{
    use SerializesModels;
}
