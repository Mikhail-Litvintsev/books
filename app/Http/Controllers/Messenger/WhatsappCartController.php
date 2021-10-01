<?php

namespace App\Http\Controllers\Messenger;

class WhatsappCartController extends BaseController
{
    public function __invoke()
    {
        $url = $this->service->getUrlCartMessageWhatsapp();

        return redirect()->away($url);
    }
}
