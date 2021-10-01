<?php

namespace App\Http\Controllers\Admin\Settings\Whatsapp;

use App\Http\Controllers\Admin\Settings\BaseController;
use App\Http\Requests\Admin\Settings\Whatsapp\UpdateRequest;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request)
    {
        $this->service->whatsappUpdate($request);

        return redirect()->route('admin.settings.index')->with('announce', 'Изменения в whatsapp сохранены!');
    }
}
