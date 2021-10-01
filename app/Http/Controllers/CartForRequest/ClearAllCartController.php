<?php

namespace App\Http\Controllers\CartForRequest;

class ClearAllCartController extends BaseController
{
    public function __invoke()
    {
        \Cart::clear();

        session()->flash('success', 'Корзина очищена!');

        return redirect()->route('cart.list');
    }
}
