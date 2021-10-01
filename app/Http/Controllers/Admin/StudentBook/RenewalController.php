<?php

namespace App\Http\Controllers\Admin\StudentBook;

class RenewalController extends BaseController
{
    public function __invoke()
    {
        $rollback = $this->service->getBoolRollback();

        $compact = array_merge(compact('rollback'), $this->service->getNavBarCompact());

        return view('admin.renewal.index', $compact);
    }
}
