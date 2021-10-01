<?php

namespace App\Http\Controllers\Admin\Settings\Viber;

use App\Http\Controllers\Admin\Settings\BaseController;
use App\Http\Requests\Admin\Settings\Viber\UpdateRequest;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request)
    {
        $this->service->viberUpdate($request);

        return redirect()->route('admin.settings.index')->with('announce', 'Изменения в viber сохранены!');
    }
}
