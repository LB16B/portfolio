<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PaidMemberDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
            AdminSeeder::class,
            PaidMemberSeeder::class,
            PaidMemberDetailSeeder::class,
            IngredientCategorySeeder::class,
            AgeMonthCategorySeeder::class,
        ]);

        \App\Models\Recipe::factory(1000)->create();
        \App\Models\Manual::factory(1000)->create();
        \App\Models\ingredient::factory(1000)->create();
        // \App\Models\Like::factory(3000)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}