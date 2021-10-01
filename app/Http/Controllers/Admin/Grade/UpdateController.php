<?php

namespace App\Http\Controllers\Admin\Grade;

use App\Http\Requests\Admin\Grade\UpdateRequest;
use App\Models\Grade;

class UpdateController extends BaseController
{
    public function __invoke(Grade $grade, UpdateRequest $request)
    {
        $data = $request->validated();

        $grade->update($data);

        return redirect()->route('admin.grades.index')->with('announce', 'Класс отредактирован!');
    }
}
