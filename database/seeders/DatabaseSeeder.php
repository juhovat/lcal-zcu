<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\City;
use App\Models\Country;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Country::create(['name' => 'Czechia', 'codename' => 'cs_CZ']);
        City::create(['country_id' => 1, 'name' => 'Plzeň']);
        City::create(['country_id' => 1, 'name' => 'Praha']);
        Tag::create(['name' => 'Studentská akce', 'slug' => 'studentska']);
    }
}
