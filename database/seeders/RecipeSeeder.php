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
                'cal' => 70,
                'time' => 10,
                'price' => 1000,
                'filename' => '',
            ],
            [
                'title' => 'スープ',
                'ingredient_category_id' => 2,
                'cal' => 100,
                'time' => 60,
                'price' => 300,
                'filename' => '',
            ],
            [
                'title' => 'ステーキ',
                'ingredient_category_id' => 3,
                'cal' => 50,
                'time' => 30,
                'price' => 500,
                'filename' => '',
            ],
            [
                'title' => 'クレープ',
                'ingredient_category_id' => 3,
                'cal' => 50,
                'time' => 30,
                'price' => 500,
                'filename' => '',
            ],
        ]);
    }
}