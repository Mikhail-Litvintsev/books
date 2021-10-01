<?php

namespace App\Http\Controllers\Admin\Grade;

use App\Models\Grade;

class EditController extends BaseController
{
    public function __invoke(Grade $grade)
    {
        $compact = array_merge(compact('grade'), $this->service->getNavBarCompact());

        return view('admin.grade.edit', $compact);
    }
}
