<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'islam',
            'email' => 'test@example.us', // Duplicate entry here!
            'email_verified_at' => now(),
            'password' => bcrypt('11111111'),
            'remember_token' => Str::random(10),
            'role' => 'admin',
        ]);
        Category::factory(10)->create();
        Product::factory(25)->create();


    }
}
