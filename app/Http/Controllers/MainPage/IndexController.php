<?php

namespace App\Http\Controllers\MainPage;

use App\Models\Subject;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $subjects = Subject::all();

        $compact = array_merge($this->service->getNavBarCompact(), compact('subjects'));

        return view('index', $compact);
    }
}
