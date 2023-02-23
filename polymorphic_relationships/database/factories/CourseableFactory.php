<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Courseable>
 */
class CourseableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //App\Models\Student
        return [
            'subject_id'        => DB::table('students')->inRandomOrder()->first()->id,
            'courseable_id'     => DB::table('teachers')->inRandomOrder()->first()->id,
            'courseable_type'   => fake()->randomElement(['App\Models\Student','App\Models\Teacher']),
        ];
    }
}
