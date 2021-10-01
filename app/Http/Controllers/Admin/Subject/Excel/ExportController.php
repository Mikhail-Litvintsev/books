<?php

namespace App\Http\Controllers\Admin\Subject\Excel;

use App\Exports\SubjectsExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function __invoke()
    {
        return Excel::download(new SubjectsExport, 'subjects.xlsx');
    }
}
