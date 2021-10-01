<?php

namespace App\Http\Controllers\Admin\Subject;

use App\Models\Subject;

class DeleteController extends BaseController
{
    public function __invoke(Subject $subject)
    {
        $compact = array_merge($this->service->delete($subject), $this->service->getNavBarCompact());

        if ($compact['status'] == 'deny') {
            return view('admin.subject.denyToDelete', $compact);
        }

        return redirect()->route('admin.subjects.index')->with('announce', 'Предмет удален!');
    }
}
