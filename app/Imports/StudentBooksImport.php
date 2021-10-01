<?php

namespace App\Imports;

use App\Models\Grade;
use App\Models\StudentBook;
use App\Models\Subject;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentBooksImport implements ToCollection, WithHeadingRow
{

    public function collection(Collection $collection)
    {
        $grades = Grade::all();
        $subjects = Subject::all();
        if ($collection->where('nazvanie_ucebnika')->first()) {
            $collection = $collection->sortBy('nazvanie_ucebnika');
            foreach ($collection as $row) {
                if (isset($row['klass'], $row['predmet'], $row['avtor'], $row['nazvanie_ucebnika'])) {
                    if (!empty($row['klass'] && $row['predmet'] && $row['avtor'] && $row['nazvanie_ucebnika'])) {
                        StudentBook::create([
                            'title' => $row['nazvanie_ucebnika'],
                            'author' => $row['avtor'],
                            'grade_id' => $grades->where('title', $row['klass'])->first()->id,
                            'subject_id' => $subjects->where('title', $row['predmet'])->first()->id,
                        ]);
                    }
                }
            }
        }
    }
}
