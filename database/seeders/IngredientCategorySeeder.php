<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class IngredientCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingredient_categories')->insert([
            [
            'name' => '主食 - ごはん',
            ],

            [
            'name' => '主食 - パン',
            ],

            [
            'name' => '主食 - 麺麺',
            ],

            [
            'name' => 'おかず - 野菜',
            ],

            [
            'name' => 'おかず - 芋',
            ],

            [
            'name' => 'おかず - 豆腐・豆',
            ],

            [
            'name' => 'おかず - 乳製品',
            ],

            [
            'name' => 'おかず - 卵',
            ],

            [
            'name' => 'おかず - 魚',
            ],

            [
            'name' => 'おかず - 肉',
            ],

            [
            'name' => 'その他 - スープ',
            ],

            [
            'name' => 'その他 - デザート・おやつ',
            ],
        ]);
    }
}
