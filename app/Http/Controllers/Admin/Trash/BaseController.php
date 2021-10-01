<?php

namespace App\Http\Controllers\Admin\Trash;

use App\Http\Controllers\Controller;
use App\Services\Admin\NavBarService;
use App\Services\Admin\WidgetService;

class BaseController extends Controller
{
    public $widgetsService;

    public $navBarService;

    public function __construct(WidgetService $widgetService, NavBarService $navBarService)
    {
        $this->widgetsService = $widgetService;

        $this->navBarService = $navBarService;
    }
}
