<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Christian Orlan',
            'email' => 'motas.christian9@gmail.com',
            'password' => Hash::make('Babi082325')
        ]);

        User::factory()->create([
            'name' => 'Rogelyn Nepa',
            'email' => 'jimenaneparogelyn@gmail.com',
            'password' => Hash::make('Babi082325')
        ]);
    }
}
