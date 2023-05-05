<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Company;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // $user = User::factory()->create([
        //     'name'=> 'Anuraag Moharana',
        //     'email' => 'anu@gmail.com'
        // ]);

        // Company::factory(10)->create([
        //     'user_id' => $user->id
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Company::create([
        //     'title'=> 'wefewf',
        //     'email'=> 'afwefwe',
        //     'location'=> 'fewfqwefr',
        //     'description'=> 'wedfewfw'
        // ]);

        // Company::create([
        //     'title'=> 'dcwe',
        //     'email'=> 'afwwefweefwe',
        //     'location'=> 'fewfwefewqwefr',
        //     'description'=> 'wedfwrefewewfw'
        // ]);
    }
}
