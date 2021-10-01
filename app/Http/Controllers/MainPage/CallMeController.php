<?php

namespace App\Http\Controllers\MainPage;

use App\Http\Requests\MainPage\CallMeRequest;

class CallMeController extends BaseController
{
    public function __invoke(CallMeRequest $request)
    {
        $data = $request->validated();

        $telegramMessage = $this->service->sendPhoneToTelegram($data['phone']);

        $MessageName = ($telegramMessage) ? 'announce' : 'warning';

        $message = ($telegramMessage) ? 'Спасибо! Заявка на звонок отправлена.' : 'Сервис сейчас недоступен, попробуйте позднее.';

        return redirect()->route('index.announcement')->with($MessageName, $message);
    }
}
