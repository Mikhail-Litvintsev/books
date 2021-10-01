<?php

namespace App\Http\Controllers\Admin\Subject;

use App\Http\Controllers\Controller;
use App\Services\Admin\Subject\Service;
use App\Services\Admin\WidgetService;

class BaseController extends Controller
{
    public $service;

    public $widgetService;

    public function __construct(Service $service, WidgetService $widgetService)
    {
        $this->service = $service;

        $this->widgetService = $widgetService;
    }
}
