<?php

namespace App\Imports;

use App\Models\Grade;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class GradesImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $collection)
    {
        if ($collection->where('klass')->first()) {
            $collection = $collection->sortBy('klass');
            foreach ($collection as $row) {
                if (isset($row['klass'], $row['predmet'], $row['avtor'], $row['nazvanie_ucebnika'])) {
                    if (!empty($row['klass'] && $row['predmet'] && $row['avtor'] && $row['nazvanie_ucebnika'])) {
                        Grade::firstOrCreate([
                            'title' => $row['klass'],
                        ]);
                    }
                }
            }
        }
    }
}
