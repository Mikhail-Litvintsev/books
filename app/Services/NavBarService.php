<?php

namespace App\Services;

use App\Models\Grade;
use App\Models\Messenger;
use App\Models\StudentBook;
use App\Models\Subject;

class NavBarService
{
    public function getNavBarCompact()
    {
        $grades = Grade::all();

        $viber = (Messenger::where('title', 'viber')->first()) ? Messenger::where('title',
            'viber')->first()->phone : "";

        $whatsapp = (Messenger::where('title', 'whatsapp')->first()) ? Messenger::where('title',
            'whatsapp')->first()->phone : "";

        $telegram = Messenger::where('title', 'telegram')->first();

        $phoneView = (Messenger::where('title', 'phone')->first()) ? Messenger::getPhoneView('phone') : "";

        $phone = (Messenger::where('title', 'phone')->first()) ? Messenger::where('title',
            'phone')->first()->phone : "";

        return compact('grades','telegram', 'viber', 'whatsapp', 'phoneView', 'phone');
    }

    public function getAllDataCompact()
    {
        $studentBooks = StudentBook::all();

        $subjects = Subject::all();

        return array_merge($this->getNavBarCompact(), compact('studentBooks', 'subjects'));
    }
}
