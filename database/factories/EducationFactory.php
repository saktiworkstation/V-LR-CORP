<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
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
            'degree' => fake()->company,
            'field_of_study' => fake()->company,
            'school_name' => fake()->company,
            'graduation_year' => $startDate . ' - ' . $endDate,
        ];
    }
}
