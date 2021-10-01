<?php

namespace App\Http\Controllers\Admin\Trash;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $compact = array_merge($this->widgetsService->getCompact(), $this->navBarService->getNavBarCompact());

        return view('admin.trash.index', $compact);
    }
}
