<?php

namespace App\Http\Controllers\Filter;

use App\Http\Controllers\Controller;
use App\Services\Filter\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
