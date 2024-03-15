<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Message;
use App\Models\SkillCategory;
use App\Models\User;
use Database\Factories\SkillFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Message::factory(10)->create();
        Education::factory(10)->create();
        Experience::factory(10)->create();
        SkillFactory::factory(10)->create();
        SkillCategory::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
