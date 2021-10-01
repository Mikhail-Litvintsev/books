<?php

namespace App\Http\Controllers\Admin\StudentBook;

use App\Http\Requests\Admin\StudentBook\UpdateRequest;
use App\Models\StudentBook;

class UpdateController extends BaseController
{
    public function __invoke(StudentBook $studentBook, UpdateRequest $request)
    {
        $data = $request->validated();

        $studentBook->update($data);

        return redirect()->route('admin.studentBooks.index')->with('announce', 'Учебник отредактирован!');
    }
}
