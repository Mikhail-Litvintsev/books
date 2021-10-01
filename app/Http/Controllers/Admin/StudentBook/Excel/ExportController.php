<?php

namespace App\Http\Controllers\Admin\StudentBook\Excel;

use App\Exports\StudentBooksExport;
use App\Http\Controllers\Admin\StudentBook\BaseController;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends BaseController
{
    public function __invoke()
    {
        return Excel::download(new StudentBooksExport(), 'student_books.xlsx');
    }
}
