<?php

namespace App\Services\Admin\Settings;

use App\Models\Messenger;
use App\Services\Admin\NavBarService;

class Service extends NavBarService
{
    public function whatsappStore($request)
    {
        $data = $request->validated();

        $data['title'] = 'whatsapp';

        $data['message_order'] = 'Здравствуйте, заявка с сайта:';

        $data['message_question'] = 'Здравствуйте, вопрос с сайта:';

        Messenger::create($data);
    }

    public function whatsappUpdate($request)
    {
        $data = $request->validated();

        $whatsapp = Messenger::where('title', '=', 'whatsapp')->first();

        $whatsapp->update($data);
    }

    public function telegramStore($request)
    {
        $data = $request->validated();

        $data['title'] = 'telegram';

        Messenger::create($data);
    }

    public function telegramUpdate($request)
    {
        $data = $request->validated();

        $whatsapp = Messenger::where('title', '=', 'telegram')->first();

        $whatsapp->update($data);
    }

    public function viberStore($request)
    {
        $data = $request->validated();

        $data['title'] = 'viber';

        Messenger::create($data);
    }

    public function viberUpdate($request)
    {
        $data = $request->validated();

        $whatsapp = Messenger::where('title', '=', 'viber')->first();

        $whatsapp->update($data);
    }

    public function phoneStore($request)
    {
        $data = $request->validated();

        $data['title'] = 'phone';

        Messenger::create($data);
    }

    public function phoneUpdate($request)
    {
        $data = $request->validated();

        $whatsapp = Messenger::where('title', '=', 'phone')->first();

        $whatsapp->update($data);
    }
}
