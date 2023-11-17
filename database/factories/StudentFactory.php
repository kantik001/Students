<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name' => fake()->firstName,
            'age' => random_int(18, 30),
            'city' => fake()->city,
            'country' => fake()->country,
            'is_married' => fake()->boolean,


        ];
    }
}
