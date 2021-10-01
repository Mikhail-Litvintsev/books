<?php

namespace App\Http\Controllers\CartForRequest;

class CartController extends BaseController
{
    public function __invoke()
    {
        $cartItems = \Cart::getContent();

        $compact = array_merge($this->service->getAllDataCompact(), compact('cartItems'));

        return view('cart.index', $compact);
    }
}
