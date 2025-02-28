<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create();
        Category::factory()->create([
            'name' => 'Web Development',
        ]);
        Category::factory()->create([
            'name' => 'Graphic Design',
        ]);
        Category::factory()->create([
            'name' => 'Photography',
        ]);

        Project::factory()->create([
            'title' => fake()->sentence(3),
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory()->create()->id, // Ambil atau buat kategori
            'description' => fake()->paragraph(),
            'image' => fake()->imageUrl(),
            'url' => fake()->url(),
        ]);

        Project::factory()->create([
            'title' => fake()->sentence(3),
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory()->create()->id, // Ambil atau buat kategori
            'description' => fake()->paragraph(),
            'image' => fake()->imageUrl(),
            'url' => fake()->url(),
        ]);

        Project::factory()->create([
            'title' => fake()->sentence(3),
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory()->create()->id, // Ambil atau buat kategori
            'description' => fake()->paragraph(),
            'image' => fake()->imageUrl(),
            'url' => fake()->url(),
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
