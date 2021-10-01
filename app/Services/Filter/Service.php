<?php

namespace App\Services\Filter;

use App\Http\Filters\StudentBooksFilter;
use App\Http\Requests\Filter\SearchRequest;
use App\Models\StudentBook;
use App\Models\Subject;
use App\Services\NavBarService;

class Service extends NavBarService
{
    public function getCompact(SearchRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(StudentBooksFilter::class, ['queryParams' => array_filter($data)]);

        $studentBooks = StudentBook::filter($filter)->orderBy('grade_id')->orderBy('subject_id')->paginate(30);

        $subjects = Subject::all();

        return array_merge(compact('studentBooks', 'subjects'), $this->getNavBarCompact());
    }

}
