<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // membuat factory data seed tanpa harus nge tinker
    // membuat 30 post yang berhubungan dengan 5 kategori dan 10 user
    public function run(): void
    {
        // memanggil seeder category
        $this->call([CategorySeeder::class, UserSeeder::class, PostSeeder::class]);
    }
}

// pindah