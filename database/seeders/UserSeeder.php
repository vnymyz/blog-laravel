<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // buat bikin user aku aja
        User::factory()->create([
            'name' => 'Vanya Mayazura',
            'username' => 'vanya',
            'email' => 'mayazurav@gmail.com',
            'password' => Hash::make('Vny05012'),
        ]);

        // buatin 10 user random
        User::factory(5)->create();
    }
}

// pindah