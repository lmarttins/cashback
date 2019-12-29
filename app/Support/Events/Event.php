<?php

namespace Lms\Cashback\Support\Events;

use Illuminate\Queue\SerializesModels;

/**
 * Class Event
 * @package GetLms\Cashback\Application\Events
 */
abstract class Event
{
    use SerializesModels;
}
