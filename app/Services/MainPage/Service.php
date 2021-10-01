<?php

namespace App\Services\MainPage;

use App\Models\Messenger;
use App\Services\NavBarService;

class Service extends NavBarService
{
    public function sendPhoneToTelegram($phone)
    {
        $telegram = Messenger::where('title', 'telegram')->first();

        if ($telegram) {

            $token = $telegram->token;

            $chat_id = $telegram->chat_id;

            $message = $phone;

            try {
                $telegramMessage = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}",
                    "r");

                if (!$telegramMessage) {
                    throw new \Exception('connection error');
                }
            } catch (\Exception $exception) {
                return false;
            }
            return true;
        }
        return false;
    }
}

