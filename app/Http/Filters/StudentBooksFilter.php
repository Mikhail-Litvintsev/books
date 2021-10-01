<?php

namespace App\Http\Filters;

use App\Models\Grade;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Builder;

class StudentBooksFilter extends AbstractFilter
{
    public const GRADE = 'grade';

    public const SUBJECT = 'subject';


    protected function getCallbacks(): array
    {
        return [
            self::GRADE => [$this, 'grade'],

            self::SUBJECT => [$this, 'subject'],
        ];
    }

    public function grade(Builder $builder, $value)
    {
        $gradeID = Grade::where('title', $value)->first()->id;

        $builder->where('grade_id', $gradeID);
    }

    public function subject(Builder $builder, $value)
    {
        $subjectID = Subject::where('title', $value)->first()->id;

        $builder->where('subject_id', $subjectID);
    }

}
