<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
<<<<<<< HEAD
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
>>>>>>> 3cfa08d (test)

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
<<<<<<< HEAD
            [
            'name' => '主食 - パン',
            ],
            [
            'name' => '主食 - 麺',
            ],
            [
            'name' => 'おかず - 野菜',
            ],
            [
            'name' => 'おかず - 芋',
            ],
            [
            'name' => 'おかず - 豆腐',
            ],
            [
            'name' => 'おかず - 豆',
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
            'name' => 'その他 - 果物',
            ],
            [
            'name' => 'その他 - スープ',
            ],
            [
            'name' => 'その他 - デザート',
            ],
            [
            'name' => 'その他 - おやつ',
=======

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
>>>>>>> 3cfa08d (test)
            ],
        ]);
    }
}
