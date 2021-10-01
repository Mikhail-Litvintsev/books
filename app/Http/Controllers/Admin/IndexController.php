<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Messenger;
use App\Models\StudentBook;
use App\Models\Subject;

class IndexController extends Controller
{
    public function __invoke()
    {
        $studentBooks = StudentBook::all();
        $trash = StudentBook::onlyTrashed();
        $grades = Grade::all();
        $subjects = Subject::all();
        $messengers = Messenger::all();
        return view('admin.index',
            compact(
                'studentBooks',
                'grades',
                'subjects',
                'trash',
                'messengers'
            ));
    }
}
