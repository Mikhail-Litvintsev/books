<?php

namespace App\Http\Controllers\Admin\Subject;

class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('admin.subject.create', $this->service->getNavBarCompact());
    }
}
