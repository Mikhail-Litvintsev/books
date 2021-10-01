<?php

namespace App\Http\Controllers\Admin\Subject;

use App\Http\Requests\Admin\Subject\StoreRequest;
use App\Models\Subject;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        Subject::firstOrCreate($data);

        return redirect()->route('admin.subjects.index')->with('announce', 'Предмет добавлен!');
    }
}
