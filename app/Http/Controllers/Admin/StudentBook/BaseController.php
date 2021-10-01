<?php

namespace App\Http\Controllers\Admin\StudentBook;

use App\Http\Controllers\Controller;
use App\Services\Admin\StudentBook\Service;
use App\Services\Admin\WidgetService;

class BaseController extends Controller
{
    public $widgetService;

    public $service;

    public function __construct(WidgetService $widgetService, Service $service)
    {
        $this->widgetService = $widgetService;

        $this->service = $service;
    }
}
