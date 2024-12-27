<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Job;

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
            'first_name' => 'Daktar',
            'last_name'=> 'Ken',
            'email' => 'test@example.com',
        ]);

        Job::factory(150)->create();
    }
}
