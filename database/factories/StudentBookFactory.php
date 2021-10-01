<?php

namespace Database\Factories;

use App\Models\StudentBook;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentBookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentBook::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $subject = Subject::all()->random();
        return [
            'title' => $subject->title,
            'subject_id' => $subject->id,
            'grade_id' => rand(1,11),
            'author' => $this->faker->name(),
        ];
    }
}
