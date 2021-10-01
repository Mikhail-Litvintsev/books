<?php

namespace App\Services\Admin\StudentBook;

use App\Imports\GradesImport;
use App\Imports\StudentBooksImport;
use App\Imports\SubjectImport;
use App\Models\Grade;
use App\Models\StudentBook;
use App\Models\Subject;
use App\Services\Admin\NavBarService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class Service extends NavBarService
{
    public function importExcel(Request $request)
    {
        DB::beginTransaction();

        $this->deleteBase();

        Excel::import(new GradesImport, $request->file('file'));
        Excel::import(new SubjectImport, $request->file('file'));
        Excel::import(new StudentBooksImport, $request->file('file'));

        if (StudentBook::first()) {
            DB::commit();

            return ['succes' => 'База данных учебников успешно обновлена!'];
        }

        DB::rollBack();

        return ['error' => 'Не удалось обновить базу! Таблица либо пуста, либо название колонок не верное.'];
    }

    protected function deleteBase()
    {
        Grade::query()->delete();

        Subject::query()->delete();

        StudentBook::query()->delete();
    }

    public function rollbackUpdate()
    {
        $lastUpdate = StudentBook::onlyTrashed()->orderByDesc('deleted_at')->first()->deleted_at->toDateTimeString();

        if ($lastUpdate) {
            try {
                DB::beginTransaction();

                StudentBook::withoutTrashed()->delete();
                StudentBook::withTrashed()->where('deleted_at', $lastUpdate)->restore();

                Grade::withoutTrashed()->delete();
                Grade::withTrashed()->where('deleted_at', $lastUpdate)->restore();

                Subject::withoutTrashed()->delete();
                Subject::withTrashed()->where('deleted_at', $lastUpdate)->restore();

            } catch (\Exception $exception) {
                DB::rollBack();

                return ['error' => 'Ошибка! Не удалось откатить базу данных.'];
            }

            DB::commit();

            return ['succes' => 'Откат базы данных - успешно!'];
        }

        return ['error' => 'Ошибка! Не найдена предыдущая версия базы.'];
    }

    public function getBoolRollback()
    {
        if (StudentBook::onlyTrashed()->first()) {
            $lastDeleted = StudentBook::onlyTrashed()->orderByDesc('deleted_at')->first()->deleted_at;

            $firstCreated = StudentBook::first()->created_at;

            return $lastDeleted <= $firstCreated;
        } else {
            return false;
        }
    }
}
