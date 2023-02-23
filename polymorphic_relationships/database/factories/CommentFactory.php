<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'body'              => fake()->sentence(20),
            'commentable_id'    => DB::table('posts')->inRandomOrder()->first()->id,
            'commentable_type'  => fake()->randomElement(['App\Models\Post','App\Models\Video']),
        ];
    }
}
