<?php

namespace App\Http\Controllers\Admin\Settings\Viber;

use App\Http\Controllers\Admin\Settings\BaseController;
use App\Http\Requests\Admin\Settings\Viber\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $this->service->viberStore($request);

        return redirect()->route('admin.settings.index')->with('announce', 'Viber создан!');
    }
}
