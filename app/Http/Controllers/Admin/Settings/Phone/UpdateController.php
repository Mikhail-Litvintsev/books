<?php

namespace App\Http\Controllers\Admin\Settings\Phone;

use App\Http\Controllers\Admin\Settings\BaseController;
use App\Http\Requests\Admin\Settings\Phone\UpdateRequest;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request)
    {
        $this->service->phoneUpdate($request);

        return redirect()->route('admin.settings.index')->with('announce', 'Номер телефона сохранен!');
    }
}
