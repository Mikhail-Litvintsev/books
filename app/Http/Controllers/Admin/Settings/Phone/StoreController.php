<?php

namespace App\Http\Controllers\Admin\Settings\Phone;

use App\Http\Controllers\Admin\Settings\BaseController;
use App\Http\Requests\Admin\Settings\Phone\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $this->service->phoneStore($request);

        return redirect()->route('admin.settings.index')->with('announce', 'Номер телефона сохранен!');
    }
}
