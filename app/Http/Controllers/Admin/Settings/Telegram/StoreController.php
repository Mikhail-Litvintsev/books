<?php

namespace App\Http\Controllers\Admin\Settings\Telegram;

use App\Http\Controllers\Admin\Settings\BaseController;
use App\Http\Requests\Admin\Settings\Telegram\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $this->service->telegramStore($request);

        return redirect()->route('admin.settings.index')->with('announce', 'Telegram создан!');
    }
}
