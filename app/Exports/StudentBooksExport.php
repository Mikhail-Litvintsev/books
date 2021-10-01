<?php

namespace App\Exports;

use App\Models\Grade;
use App\Models\StudentBook;
use App\Models\Subject;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class StudentBooksExport implements FromView
{

    public function view(): View
    {
        $studentBooks = StudentBook::all();
        $grades = Grade::all();
        $subjects = Subject::all();
        return view('admin.studentBooks.excel.export', compact('studentBooks', 'grades', 'subjects'));
    }
}
