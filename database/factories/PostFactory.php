<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(rand(6, 8));
        return [
            // membuat skema database post dengan data dummy
            'title' => $title,
            'author_id' => User::factory(), // ada relasi sama tabel user
            'category_id' => Category::factory(),
            'slug' => Str::slug($title),// dia akan otomatis menjadi judul-artikel-1
            'body' => fake()->text()
        ];
    }
}

// pindah