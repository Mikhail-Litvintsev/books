<?php

namespace App\Services\StudentBookByGradePage;

use App\Models\Grade;
use App\Models\StudentBook;
use App\Models\Subject;
use App\Services\NavBarService;

class Service extends NavBarService
{
    public function getCompact($num)
    {
        $gradeTitle = urldecode($num);

        $grade = Grade::where('title', $gradeTitle)->first();

        if ($grade) {
            $studentBooks = StudentBook::where('grade_id', $grade->id)->paginate(30);

            $subjects = Subject::all();

            return array_merge(compact('studentBooks', 'subjects'), $this->getNavBarCompact());

        } else {
            return false;
        }
    }
}
