<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory()->create()->id, // Ambil atau buat kategori
            'description' => fake()->paragraph(),
            'image' => fake()->imageUrl(),
            'url' => fake()->url(),
        ];
    }
}
