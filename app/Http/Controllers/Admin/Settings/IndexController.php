<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Models\Messenger;
use App\Models\User;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $user = User::where('name', 'admin')->first();

        $whatsapp = Messenger::where('title', '=', 'whatsapp')->first();

        $viber = Messenger::where('title', '=', 'viber')->first();

        $telegram = Messenger::where('title', '=', 'telegram')->first();

        $phone = Messenger::where('title', '=', 'phone')->first();

        $compact = array_merge(compact('whatsapp', 'telegram', 'viber', 'phone', 'user'), $this->service->getNavBarCompact());

        return view('admin.settings.index', $compact);
    }
}
