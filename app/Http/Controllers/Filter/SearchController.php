<?php

namespace App\Http\Controllers\Filter;

use App\Http\Requests\Filter\SearchRequest;

class SearchController extends BaseController
{
    public function __invoke(SearchRequest $request)
    {
        $compact = $this->service->getCompact($request);

        return view('studentBooks.filter', $compact);
    }
}
