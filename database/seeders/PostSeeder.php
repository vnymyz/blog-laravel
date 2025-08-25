<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Post::factory(30)->recycle([
            Category::all(), // menjalankan semua yang ada di category seeder
            User::all() // User seeder
        ])->create();
    }
}

// pindah