<?php

namespace App\Http\Controllers\Delivery;

class DeliveryController extends BaseController
{
    public function __invoke()
    {
        return view('delivery', $this->service->getAllDataCompact());
    }
}
