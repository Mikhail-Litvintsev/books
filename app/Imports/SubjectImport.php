<?php

namespace App\Imports;

use App\Models\Subject;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SubjectImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $collection)
    {
        if ($collection->where('predmet')->first()) {
            $collection = $collection->sortBy('predmet');
            foreach ($collection as $row) {
                if (isset($row['klass'], $row['predmet'], $row['avtor'], $row['nazvanie_ucebnika'])) {
                    if (!empty($row['klass'] && $row['predmet'] && $row['avtor'] && $row['nazvanie_ucebnika'])) {
                        Subject::firstOrCreate([
                            'title' => $row['predmet'],
                        ]);
                    }
                }
            }
        }
    }
}
