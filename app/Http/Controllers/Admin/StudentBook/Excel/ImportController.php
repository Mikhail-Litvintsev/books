<?php

namespace App\Http\Controllers\Admin\StudentBook\Excel;

use App\Http\Controllers\Admin\StudentBook\BaseController;
use Illuminate\Http\Request;

class ImportController extends BaseController
{
    public function __invoke(Request $request)
    {
        $resultMessage = $this->service->importExcel($request);

        return redirect()->route('admin.studentBooks.renewal')->with($resultMessage);
    }
}
