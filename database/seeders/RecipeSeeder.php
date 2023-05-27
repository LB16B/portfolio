<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')->insert([
            [
                'title' => 'サラダ',
                'ingredient_category_id' => 1,
            ],
            [
                'title' => 'スープ',
                'ingredient_category_id' => 2,
            ],
            [
                'title' => 'ステーキ',
                'ingredient_category_id' => 3,
            ],
        ]);
    }
}
