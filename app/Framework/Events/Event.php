<?php

namespace Lms\Cashback\Framework\Events;

use Illuminate\Queue\SerializesModels;

/**
 * Class Event
 * @package GetLms\Cashback\Application\Events
 */
abstract class Event
{
    use SerializesModels;
}
