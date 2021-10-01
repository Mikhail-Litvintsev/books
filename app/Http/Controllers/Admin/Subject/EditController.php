<?php

namespace App\Http\Controllers\Admin\Subject;

use App\Models\Subject;

class EditController extends BaseController
{
    public function __invoke(Subject $subject)
    {
        $compact = array_merge(compact('subject'), $this->service->getNavBarCompact());

        return view('admin.subject.edit', $compact);
    }
}
