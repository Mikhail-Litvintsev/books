<?php

namespace App\Http\Controllers\Admin\StudentBook;

class RollbackController extends BaseController
{
    public function __invoke()
    {
        $resultMessage = $this->service->rollbackUpdate();

        return redirect()->route('admin.studentBooks.renewal')->with($resultMessage);
    }
}
