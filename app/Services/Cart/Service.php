<?php

namespace App\Services\Cart;

use App\Services\NavBarService;
use Illuminate\Http\Request;

class Service extends NavBarService
{
    public function updateCart(Request $request)
    {
        foreach ($request->id as $key => $idValue) {
            if ($request->quantity[$key] < 1) {
                \Cart::remove($idValue);
            } else {
                \Cart::update(
                    $idValue,
                    [
                        'quantity' => [
                            'relative' => false,
                            'value' => $request->quantity[$key]
                        ],
                    ]
                );
            }
        }
    }

    public function addToCart($request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);
    }
}
