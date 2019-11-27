<?php

namespace Cashback\Domains\Cashback\Http\Actions\Cashback;

use Cashback\Application\Http\Controller\Controller;

/**
 * Class Cashback
 *
 * @package Cashback\Domains\Cashback\Http\Actions\Cashback
 */
class Cashback extends Controller
{
    public function __invoke()
    {
        return response()->json(['message' => 'success'], 200);
    }
}
