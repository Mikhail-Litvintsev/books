<?php

namespace App\Http\Controllers\CartForRequest;

use Illuminate\Http\Request;

class PreparingController extends BaseController
{
    public function __invoke(Request $request)
    {
        if ($request->id) {
            $this->service->updateCart($request);
        }

        $cartItems = \Cart::getContent();

        $compact = array_merge($this->service->getAllDataCompact(), compact('cartItems'));

        return view('cart.preparing', $compact);
    }
}
