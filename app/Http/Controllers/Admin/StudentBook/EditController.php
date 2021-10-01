<?php

namespace App\Http\Controllers\Admin\StudentBook;

use App\Models\Grade;
use App\Models\StudentBook;
use App\Models\Subject;

class EditController extends BaseController
{
    public function __invoke(StudentBook $studentBook)
    {
        $grades = Grade::all();

        $subjects = Subject::all();

        $compact = array_merge(compact('studentBook', 'grades', 'subjects'), $this->service->getNavBarCompact());

        return view('admin.studentBooks.edit', $compact);
    }
}
