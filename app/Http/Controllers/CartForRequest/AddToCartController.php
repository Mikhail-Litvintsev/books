<?php

namespace App\Http\Controllers\CartForRequest;

use Illuminate\Http\Request;

class AddToCartController extends BaseController
{
    public function __invoke(Request $request)
    {
        $this->service->addToCart($request);

        return redirect($request->headers->get('referer', '/'));
    }
}
