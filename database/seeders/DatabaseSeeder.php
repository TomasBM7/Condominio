<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\house;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Tomas',
            'lastname' => 'Burgos',
            'phone' => '12345678',
            'ci' => '12345678',
            'email' => 'test@example.com',
            'password' => 'password',
        ]);
        
        house::truncate();
        house::factory()->count(10)->create([
            'ubication' => 'nalsdnflkn',
            'description' => 'description'
        ]);
    }
}
