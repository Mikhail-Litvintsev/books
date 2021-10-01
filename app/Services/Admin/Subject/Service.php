<?php

namespace App\Services\Admin\Subject;

use App\Models\StudentBook;
use App\Models\Subject;
use App\Services\Admin\NavBarService;

class Service extends NavBarService
{
    public function delete(Subject $subject)
    {
        if (StudentBook::where('subject_id', $subject->id)->exists()) {
            $status = 'deny';

            $studentBooks = StudentBook::where('subject_id', $subject->id)->get();

            return compact('status', 'studentBooks', 'subject');
        }

        $subject->delete();

        $status = 'accept';

        return compact('status');
    }
}
