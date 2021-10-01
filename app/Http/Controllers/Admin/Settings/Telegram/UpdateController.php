<?php

namespace App\Http\Controllers\Admin\Settings\Telegram;

use App\Http\Controllers\Admin\Settings\BaseController;
use App\Http\Requests\Admin\Settings\Telegram\UpdateRequest;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request)
    {
        $this->service->telegramUpdate($request);

        return redirect()->route('admin.settings.index')->with('announce', 'Изменения в telegram сохранены!');
    }
}
