<?php

namespace App\Http\Controllers\Admin\Settings\Whatsapp;

use App\Http\Controllers\Admin\Settings\BaseController;
use App\Http\Requests\Admin\Settings\Whatsapp\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $this->service->whatsappStore($request);

        return redirect()->route('admin.settings.index')->with('announce', 'WhatsApp создан!');
    }
}
