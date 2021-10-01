<?php

namespace App\Http\Controllers\Admin\Grade;

use App\Http\Requests\Admin\Grade\StoreRequest;
use App\Models\Grade;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        Grade::firstOrCreate($data);

        return redirect()->route('admin.grades.index')->with('announce', 'Класс добавлен!');
    }
}
