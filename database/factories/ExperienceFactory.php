<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = fake()->date('d-m-Y');
        $endDate = fake()->date('d-m-Y', '+1 year');

        return [
            'company' => fake()->company,
            'durations' => $startDate . ' - ' . $endDate,
            'field' => fake()->word,
            'order' => fake()->unique()->numberBetween(1, 100),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
