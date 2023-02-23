<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $arr = Array(['App\Models\Doctor','App\Models\Patient']);
        return [
            'url'             => fake()->imageUrl(50,50,'person'),
            'imageable_id'    => DB::table('doctors')->inRandomOrder()->first()->id,
            'imageable_type'  => fake()->randomElement(['App\Models\Doctor','App\Models\Patient']),
        ];
    }
}
