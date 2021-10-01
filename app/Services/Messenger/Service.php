<?php

namespace App\Services\Messenger;

use App\Models\Grade;
use App\Models\Messenger;
use App\Models\StudentBook;
use App\Models\Subject;
use App\Services\NavBarService;

class Service extends NavBarService
{
    public function getUrlCartMessageWhatsapp()
    {
        $whatsapp = Messenger::where('title', 'whatsapp')->first();

        $url = 'https://wa.me/?phone=' .
            $whatsapp->phone .
            '&text=' .
            urlencode($whatsapp->message_order) .
            "%0A" .
            $this->getText();

        return $url;
    }

    private function getText()
    {
        $text = '';

        $cart = \Cart::getContent();

        $studentBookIDs = $cart->pluck('id');

        $studentBookQuantity = $cart->pluck('quantity');

        $studentBooks = StudentBook::findMany($studentBookIDs);

        $grades = Grade::all();

        $i = 1;

        foreach ($studentBooks as $key => $studentBook) {

            $title = $studentBook->title;

            $author = $studentBook->author;

            $grade = $grades->where('id',  $studentBook->grade_id)->first()->title . ' класс';

            $quantity = $studentBookQuantity[$key] . ' шт.';

            $text .= urlencode($i . ') ' . $title . ', ' . $author . ', ' . $grade . ', ' . $quantity) . "%0A";

            $i++;
        }
        return $text;
    }
}
