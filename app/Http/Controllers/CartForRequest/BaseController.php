<?php

namespace App\Http\Controllers\CartForRequest;

use App\Http\Controllers\Controller;
use App\Services\Cart\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
