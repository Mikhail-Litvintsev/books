<?php

namespace App\Http\Controllers\Admin\Subject;

use App\Http\Requests\Admin\Subject\UpdateRequest;
use App\Models\Subject;

class UpdateController extends BaseController
{
    public function __invoke(Subject $subject, UpdateRequest $request)
    {
        $data = $request->validated();

        $subject->update($data);

        return redirect()->route('admin.subjects.index')->with('announce', 'Предмет отредактрован!');
    }
}
