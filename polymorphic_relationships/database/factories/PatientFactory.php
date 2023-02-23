<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'patient_name'      => fake()->firstName(),
            'patient_email'     => fake()->unique()->safeEmail(),
            'patient_phone'     => fake()->unique()->phoneNumber(),
            'city'             =>  fake()->city(),
        ];
    }
}
