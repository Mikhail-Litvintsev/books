<?php

namespace App\Http\Controllers\CartForRequest;

use Illuminate\Http\Request;

class UpdateCartController extends BaseController
{
    public function __invoke(Request $request)
    {
        $this->service->updateCart($request);

        session()->flash('success', 'Корзина обновлена');

        return redirect()->route('cart.list');
    }
}
