<?php

namespace App\Http\Controllers\StudentBookByGrade;

use App\Http\Controllers\Controller;
use App\Services\StudentBookByGradePage\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
