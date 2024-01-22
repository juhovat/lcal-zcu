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

        Country::create(['name' => 'Czechia (Česko)', 'codename' => 'cs_CZ']);
        
        City::create(['country_id' => 1, 'name' => 'Plzeň']);
        City::create(['country_id' => 1, 'name' => 'Praha']);
        Tag::create(['name' => 'Pořádáno studenty/mládeží', 'slug' => 'studentska']);
        Tag::create(['name' => 'Vstupné zdarma/dobrovolné', 'slug' => 'entry-free']);
        Tag::create(['name' => 'Jídlo (Zdarma)', 'slug' => 'food-free']);
        Tag::create(['name' => 'Jídlo (Ke koupi)', 'slug' => 'food-paid']);
        Tag::create(['name' => '♿ Přistupné podlaží', 'slug' => 'accessibility-wheelchair']);
    }
}
