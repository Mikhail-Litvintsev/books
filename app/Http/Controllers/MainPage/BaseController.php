<?php

namespace App\Http\Controllers\MainPage;

use App\Http\Controllers\Controller;
use App\Services\MainPage\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
