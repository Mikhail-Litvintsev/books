<?php

namespace App\Http\Controllers\Admin\Subject;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $compact = array_merge($this->widgetService->getCompact(), $this->service->getNavBarCompact());

        return view('admin.subject.index', $compact);
    }
}
