<?php

namespace App\Http\Controllers\Admin\Trash;

use App\Models\StudentBook;

class StudentBookClearController extends BaseController
{
    public function __invoke()
    {
        StudentBook::onlyTrashed()->forceDelete();

        return redirect()->route('admin.trash.index')->with('announce', 'Корзина очищена!');
    }
}
