<?php

namespace App\Http\Controllers\Messenger;

use App\Http\Controllers\Controller;
use App\Services\Messenger\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
