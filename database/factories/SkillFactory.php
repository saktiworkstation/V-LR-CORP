<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'skill_name' => fake()->sentence(mt_rand(2, 8)),
            'skill_category' => mt_rand(1, 10),
            'proficiency_level' => fake()->word,
        ];
    }
}
