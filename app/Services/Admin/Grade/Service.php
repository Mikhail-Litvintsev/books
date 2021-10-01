<?php

namespace App\Services\Admin\Grade;

use App\Models\Grade;
use App\Models\StudentBook;
use App\Services\Admin\NavBarService;

class Service extends NavBarService
{
    public function delete(Grade $grade)
    {
        if (StudentBook::where('grade_id', $grade->id)->exists()) {
            $status = 'deny';

            $studentBooks = StudentBook::where('grade_id', $grade->id)->get();

            return compact('status', 'studentBooks', 'grade');
        }

        $grade->delete();

        $status = 'accept';

        return compact('status');
    }
}
