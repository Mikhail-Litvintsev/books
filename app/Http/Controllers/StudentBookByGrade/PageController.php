<?php

namespace App\Http\Controllers\StudentBookByGrade;

class PageController extends BaseController
{
    public function __invoke($num)
    {
        $compact = $this->service->getCompact($num);

        return ($compact) ? view('studentBooks.page-by-grade', $compact) : redirect()->route('index');
    }
}
