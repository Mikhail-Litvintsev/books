<?php

namespace App\Http\Controllers\CartForRequest;

use Illuminate\Http\Request;

class RemoveCartController extends BaseController
{
    public function __invoke(Request $request)
    {
        \Cart::remove($request->idToRemove);

        return redirect($request->headers->get('referer', '/'));
    }
}
