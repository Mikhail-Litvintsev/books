<?php

namespace App\Http\Controllers\Admin\StudentBook;

use App\Models\Grade;
use App\Models\Subject;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $subjects = Subject::all();

        $grades = Grade::all();

        $compact = array_merge(compact('subjects', 'grades'), $this->service->getNavBarCompact());

        return view('admin.studentBooks.create', $compact);
    }
}
