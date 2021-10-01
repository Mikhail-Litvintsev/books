<?php

namespace App\Services\Admin;

use App\Models\Messenger;

class NavBarService
{
    public function getNavBarCompact()
    {
        $messengers = Messenger::all();

        return compact('messengers');
    }
}
