<?php

namespace App\Exports;

use App\Models\Subject;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SubjectsExport implements FromView
{
    public function view(): View
    {
        return view('admin.subject.excel.export', ['subjects' => Subject::all()]);
    }
}
