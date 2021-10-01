<?php

namespace App\Http\Controllers\Admin\Grade;

use App\Models\Grade;

class DeleteController extends BaseController
{
    public function __invoke(Grade $grade)
    {
        $compact = array_merge($this->service->delete($grade), $this->service->getNavBarCompact());

        if ($compact['status'] == 'deny') {
            return view('admin.grade.denyToDelete', $compact);
        }

        return redirect()->route('admin.grades.index')->with('announce', 'Класс удален!');
    }
}
