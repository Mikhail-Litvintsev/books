<?php

namespace App\Http\Controllers\Admin\Grade;

class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('admin.grade.create', $this->service->getNavBarCompact());
    }
}
