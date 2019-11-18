<?php

namespace Cashback\Domains\Cashback\Http\Actions\Cashback;

use Cashback\Application\Http\Controller\Controller;

class Cashback extends Controller
{
    public function __invoke()
    {
        return response()->json([
            'message' => 'cashback'
        ], 200);
    }
}
