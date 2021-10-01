<?php

namespace App\Services\Admin;

use App\Models\Grade;
use App\Models\StudentBook;
use App\Models\Subject;

class WidgetService
{
    public function getCompact()
    {
        $studentBooks = StudentBook::all()->sortBy('grade_id');

        $trash = StudentBook::onlyTrashed();

        $grades = Grade::all();

        $subjects = Subject::all();

        return compact('studentBooks', 'trash', 'grades', 'subjects');
    }
}
