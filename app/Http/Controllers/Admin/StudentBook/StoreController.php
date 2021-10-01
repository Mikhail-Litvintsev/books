<?php

namespace App\Http\Controllers\Admin\StudentBook;

use App\Http\Requests\Admin\StudentBook\StoreRequest;
use App\Models\StudentBook;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        StudentBook::create($data);

        return redirect()->route('admin.studentBooks.index')->with('announce', 'Учебник добавлен');
    }
}
