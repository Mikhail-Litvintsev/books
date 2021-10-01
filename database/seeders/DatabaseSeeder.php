<?php

namespace Database\Seeders;

use App\Models\StudentBook;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();

        /*
         * If you want to test app, try to uncomment this.
         * After use:
         * php artisan migrate:fresh --seed

        for ($i = 1 ; $i <= 11; $i++) {
            DB::table('grades')->insert(['title' => $i]);
        }

        DB::table('messengers')->insert([
            'title' => 'whatsapp',
            'phone' => '79000000000',
        ]);

        DB::table('messengers')->insert([
            'title' => 'viber',
            'phone' => '79000000000',
        ]);

        DB::table('messengers')->insert([
            'title' => 'telegram',
            'token' => 'need token',
            'chat_id' => 'need chat_id'
        ]);

        $subjects = ["Алгебра", "Англииский", "Биология", "География", "Геометрия", "Естествознание", "ИЗО", "Информатика", "Искусство", "История", "Литература", "Математика", "Музыка", "МХК", "Немецкий", "ОБЖ", "Обществознание", "ОДНК", "Окружающий мир", "ОПК", "Право", "Природоведение", "Риторика", "Русский", "Технология", "Физика", "Физкультура", "Французский", "Химия", "Черчение", "Чтение", "Экономика",];
        foreach ($subjects as $subject) {
            DB::table('subjects')->insert(['title' => $subject]);
        }

        StudentBook::factory(200)->create();
        */

        // \App\Models\User::factory(10)->create();
    }
}
