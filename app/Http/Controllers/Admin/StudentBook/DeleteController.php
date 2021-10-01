<?php

namespace App\Http\Controllers\Admin\StudentBook;

use App\Http\Requests\Admin\StudentBook\DestroyRequest;
use App\Models\StudentBook;

class DeleteController extends BaseController
{
    public function __invoke(StudentBook $studentBook)
    {
        $studentBook->delete();

        return redirect()->route('admin.studentBooks.index')->with('announce', 'Учебник удален!');
    }
}
